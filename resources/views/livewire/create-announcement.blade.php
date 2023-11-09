<div>
    <h2 class="mb-3 text-center mb-5">{{__('ui.compilaIlForm')}}</h2>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <div class="form-group">
            <label for="title">{{__('ui.titolo')}}</label>
            <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror"  required>
            @error('title')
                {{ $message }}
            @enderror 
        </div>
        <div class="form-group">
            <label for="body">{{__('ui.descrizione')}}</label>
            <textarea wire:model="body" type="text" class="form-control  @error('body') is-invalid @enderror"   required></textarea>
            @error('body')
                {{ $message }}
            @enderror 
        </div>
        <div class="form-group">
            <label for="title">{{__('ui.prezzo')}}</label>
            <input type="number" step="0.01" pattern="\d+\.\d{2}" wire:model="price" class="form-control   @error('price') is-invalid @enderror" required>
            @error('price')
                {{ $message }}
            @enderror 
        </div>
        <div class="form-group">
            <label for="title">{{__('ui.categoria')}}</label>
            <select wire:model.defer="category" id="category" class="form-control  @error('category') is-invalid @enderror" required>
                <option value="">{{__('ui.seleziona')}}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">{{__('ui.inserisciImmagini')}}</label>
            <input type="file" wire:model="temporary_images" name="images" multiple class="form-control   @error('temporary_images.*') is-invalid @enderror">
            @error('temporary_images.*')
            {{__('validation.max.file')}}
            @enderror 
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <span>{{__('ui.anteprimaImmagini')}}</span>
                    <div class="row border border-4 border-info rounded shadow py-4">
                        @foreach ($images as $key => $image )
                        <div class="col my-3 ">
                            <img class="img-fluid" src="{{$image->temporaryUrl()}}" alt="">
                            <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.rimuoviImmagine')}}
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <div class="d-grid gap-2 text-center">
        <button type="submit" class="btn bu-orange  mt-3">{{__('ui.creaAnnuncio')}}</button>
        <a class="mt-2" href="{{route('homepage')}}">{{__('ui.annulla')}}</a>
        </div>
    </form>
</div>