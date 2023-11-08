<?php

namespace App\Http\Livewire;

use App\Jobs\AddWatermark;
use App\Jobs\GoogleVisionSafeSearch;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Jobs\RemoveFaces;

class CreateAnnouncement extends Component
{   
    use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];
    public $image;
    public $announcement;

    protected $rules = 
    [
        'title' => 'required|min:5',
        'body' => 'required|min:10',
        'category' => 'required',
        'price' => 'required|numeric|regex:/^\d+(\.\d{2})?$/',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $message = 
    [
        'required' => 'il campo :attribute è richiesto',
        'min' => 'il campo :attribute è troppo corto (min 5)',
        'max' => 'il campo :attribute è troppo lungo ',
        'numeric' => 'il campo :attribute deve essere un numero',

    ];

    public function updatedTemporaryImages()
    {
        if 
        (
            $this->validate
            ([
                'temporary_images.*' => 'image|max:1024',
            ])
        ) 
        {
            foreach ($this->temporary_images as $image) 
            {
                $this->images[] = $image;
            }
        }
    }

    public function store()
    {

        $this->validate();
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if (count($this->images)) 
        {
            foreach ($this->images as $image) 
            {
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);
            

                RemoveFaces::withChain([
                    new GoogleVisionSafeSearch($newImage->id),
                    new ResizeImage($newImage->path, 800, 600),
                    new AddWatermark($newImage->id),
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        $this->announcement->user()->associate(Auth::user());
        $this->announcement->save();
        
        session()->flash('message', trans('ui.annuncioApprovazione'));
        $this->cleanForm();
        
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) 
        {
            unset($this->images[$key]);
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function cleanForm()
    {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
        $this->temporary_images = [];
        $this->images = [];
    }
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
