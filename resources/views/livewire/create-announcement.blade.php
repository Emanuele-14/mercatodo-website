<div>
    <h2 class="mb-3 text-center mb-5">{{ __('ui.compilaIlForm') }}</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <div class="form-group">
            <label for="title">{{ __('ui.titolo') }}</label>
            <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" required>
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="body">{{ __('ui.descrizione') }}</label>
            <textarea wire:model="body" type="text" class="form-control  @error('body') is-invalid @enderror" required></textarea>
            @error('body')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="title">{{ __('ui.prezzo') }}</label>
            <input type="number" step="0.01" pattern="\d+\.\d{2}" wire:model="price"
                class="form-control   @error('price') is-invalid @enderror" required>
            @error('price')
                {{ $message }}
            @enderror
        </div>
        {{-- create category select --}}
        <div class="form-group">
            <label for="title">{{ __('ui.categoria') }}</label>
            <select wire:model.defer="category" id="category"
                class="form-control  @error('category') is-invalid @enderror" required>
                <option value="">{{ __('ui.seleziona') }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <!--upload file-->
        <div class="form-group">
            <label for="title">{{ __('ui.inserisciImmagini') }}</label>
            <input type="file" wire:model="temporary_images" name="images" multiple
                class="form-control   @error('temporary_images.*') is-invalid @enderror">
            @error('temporary_images.*')
                {{ __('validation.max.file') }}
            @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <span>{{ __('ui.anteprimaImmagini') }}</span>
                    <div class="row border border-4 border-info rounded shadow py-4">
</div>
