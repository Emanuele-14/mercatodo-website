<x-layout>
    <x-navbar />
    <div class="container-fluid">
        @if (session()->has('message'))
            <div class="mt-3 alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if ($announcement_to_check)
            <div class="container">
                <div style="min-height: 20vh;" class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center ">
                        <h2 class="text-center">
                            {{ __('ui.annuncirevisionare') }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-0 col-md-2"></div>
                    <div class="col-12 col-md-8">
                        @if ($announcement_to_check->images && count($announcement_to_check->images) > 1)
                            <div style="display: flex; justify-content: center;" id="carouselExampleIndicators"
                                class="carousel slide">
                                <div style="width: 50%" class="carousel-inner">
                                    @foreach ($announcement_to_check->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{ $image->getUrl(800, 600) }}"
                                                class="img-fluid object-fit-contain d-block w-100 rounded rounded-8"
                                                alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class= "carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        @elseif ($announcement_to_check->images && count($announcement_to_check->images) > 0)
                            <img src="{{ $announcement_to_check->images[0]->getUrl(800, 600) }}"
                                class="img-fluid d-block w-50 rounded rounded-8 mx-auto" alt="...">
                        @else
                            <img src="{{ asset('images/noImg.jpg') }}"
                                class="img-fluid d-block w-50 rounded rounded-8 mx-auto" alt="...">
                        @endif
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card mt-5" style="width: 100%;">
                                    <div class="card-header text-white bg-custom-2">
                                        <h5>{{ __('ui.dettagliAnnuncio') }}</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <p>{{ __('ui.titolo') }}: {{ $announcement_to_check->title }}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <p>{{ __('ui.descrizione') }}: {{ $announcement_to_check->body }}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <p>{{ __('ui.prezzo') }}: € {{ $announcement_to_check->price }}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <p>{{ __('ui.annuncioCreatoIl') }}
                                                {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <p>{{ __('ui.inserzionista') }} {{ $announcement_to_check->user->name }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            
                            @if (isset($announcement_to_check->images[0]))
                                <div class="col-12 col-md-6 d-flex justify-content-center align-items-start">
                                    <div class="card mt-5" style="width:100%;">
                                        <div class="card-header text-white bg-custom-2">
                                            <h5>{{ __('ui.revisioneImmagine') }}</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <p>{{ __('ui.adulti') }}: <span
                                                        class="{{ $announcement_to_check->images[0]->adult }}"></span>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>{{ __('ui.satira') }}: <span
                                                        class="{{ $announcement_to_check->images[0]->spoof }}"></span>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>{{ __('ui.medicina') }}: <span
                                                        class="{{ $announcement_to_check->images[0]->medical }}"></span>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>{{ __('ui.violenza') }}: <span
                                                        class="{{ $announcement_to_check->images[0]->violence }}"></span>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>{{ __('ui.racy') }}: <span
                                                        class="{{ $announcement_to_check->images[0]->racy }}"></span>
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 col-md-6 d-flex justify-content-center align-items-start">
                                    <div class="card mt-5" style="width:100%;">
                                        <div class="card-header text-white bg-custom-2">
                                            <h5>{{ __('ui.revisioneImmagine') }}</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <p>{{ __('ui.immagineDefault') }}: <i class="fa-solid fa-circle-check"
                                                        style="color: #f3722c;"></i></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>


                        <div class="col-0 col-md-2"></div>
                        <div class="row my-5">
                            <div class="col-6 text-end ">
                                <form
                                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn bu-orange">{{ __('ui.accetta') }}</button>
                                </form>
                            </div>
                            <div class="col-6 ">
                                <form
                                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn bu-orange">{{ __('ui.rifiuta') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="container-fluid">
                    <div class="container">
                        <div style="min-height: 70vh;" class="row">
                            <div class="col-12 d-flex justify-content-center align-items-center flex-column ">
                                <i class="mb-4 fa-regular fa-thumbs-up fa-2xl"></i>
                                <h2 class="text-center">
                                    {{ __('ui.non') }}
                                </h2>
                                <a href="{{ route('homepage') }}">{{ __('ui.tornaHome') }}</a>
                            </div>
                        </div>
                    </div>
        @endif
    </div>
    <x-footer />
</x-layout>