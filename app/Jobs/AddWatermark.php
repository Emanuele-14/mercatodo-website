<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Manipulations;

class AddWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // private $announcement_image_id;
    private $imagePath;
    
    public function __construct($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // $i = Image::find($this->announcement_image_id);
        $image = SpatieImage::load($this->imagePath);
        if(!$image){
            return;
        }
        $image->watermark(base_path('resources/img/watermark.png'))
        ->watermarkPosition('top-left')
        ->watermarkFit(Manipulations::FIT_STRETCH)
        ->save($this->imagePath);
    }
}