<x-layout>
    <x-navbar />
    <header class="bg-custom pt-5 pb-3">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center ">
                <h3 class="display-4 text-white fw-bolder">{{ $category->name }}
                </h3>
            </div>
        </div>
    </header>
    <section class="pb-1">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                @forelse ($categoriesPaginate as $announcement)
                    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"
                        class="col-lg-3 mb-5">
                        <div class="card card-custom h-100 border-0">
                            <img class="card-img-top"
                                src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(800, 600): asset('images/noImg.jpg') }}"
                                alt="..." />
                            <div class="card-body p-4">
                                <a href="{{ route('category.show', $announcement->category) }}">
                                    <div class="badge bg-custom bg-gradient rounded-pill mb-2">
                                        {{ $announcement->category->name }}
                                    </div>
                                </a>
                                <a class="link-card-body" href="{{ route('announcements.show', $announcement) }}">
                                    <h5 class="card-title truncate  mb-3">{{ $announcement->title }}</h5>
                                    <p class="card-text truncate mb-0">{{ $announcement->body }}</p>

                            </div></a>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="small">
                                            <p class="card-text mb-0">{{ __('ui.prezzo') }}: €
                                                {{ $announcement->price }}</p>
                                            <div>{{ __('ui.inserzionista') }}
                                                <span>{{ $announcement->user->name }}</span>
                                            </div>
                                            <div class="text-muted">{{ __('ui.annuncioCreatoIl') }}
                                                {{ $announcement->updated_at->format('d/m/y') }} <br> </div>
                                            <div class="pt-2">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div> 
                @empty
                    <div class="mt-5 d-flex justify-content-center align-items-center flex-column mb-3 pb-5">
                        <i class=" mb-3 fa-regular fa-face-frown fa-2xl"></i>
                        <h1 class="text-center">{{ __('ui.opsCategoria') }}</h1>
                        <a class="mt-2" href="{{ route('announcements.create') }}">
                            <h6>{{ __('ui.inserisciPerPrimo') }}</h6>
                        </a>

                    </div>
                @endforelse

            </div>
            {{ $categoriesPaginate->links() }}
            <div class="d-flex justify-content-center align-items-center mt-5">
                <span>
                    <a class="text-decoration-underline"
                        href="{{ route('announcements.index') }}">{{ __('ui.tornaAnnunci') }}
                    </a>
                </span>
            </div>
        </div>
    </section>
    <x-footer />
</x-layout>