<x-layout>
    <x-navbar />

    <section class="pb-5 pt-3 ">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center mb-3">
                <div class="col-md-6">
                    <div class="d-flex justify-content-start align-items-baseline mb-3">
                        <a class="back-ann" href="javascript:void(0);" onclick="window.history.back();">
                            <i class="fa-solid fa-arrow-left fa-2xs"></i>
                            <span>{{ __('ui.tornaAnnunci') }}</span>
                        </a>
                    </div>
                    @if ($announcement->images && count($announcement->images) > 1)
                        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
                            data-aos-offset="0" id="robotcarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($announcement->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img class="img-fluid d-block w-100 rounded rounded-8"
                                            src="{{ $image->getUrl(800, 600) }}" alt="swamp">
                                    </div>
                                @endforeach
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#robotcarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#robotcarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif($announcement->images && count($announcement->images) > 0)
                        <img class="d-block w-100 mx-auto rounded rounded-8"
                            src="{{ $announcement->images[0]->getUrl(800, 600) }}" alt="">
                    @else
                        <img class="d-block w-75 mx-auto rounded rounded-8" src="{{ asset('images/noImg.jpg') }}"
                            alt="">
                    @endif

                </div>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"
                    class="col-md-6">
                    <h1 class="ann-title">{{ $announcement->title }}</h1>
                    <h6><a href="{{ route('category.show', $announcement->category) }}"><span
                                class="badge bg-custom">{{ $announcement->category->name }}</span></h6></a>
                    <p>{{ $announcement->body }}</p>
                    <div class="fs-5 mb-2">
                        <span>€ {{ $announcement->price }}</span>
                    </div>
                    <div>
                        <div class="d-flex">
                            <div class="text-muted">{{ __('ui.annuncioCreatoIl') }}</div>
                            <div>{{ $announcement->updated_at->format('d/m/y') }}</div>
                        </div>
                        <div class="d-flex">
                            <div>{{ __('ui.inserzionista') }}</div>
                            <div class="mx-1">{{ $announcement->user->name }}</div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="p-0 card card-body border-0 shadow shadow-sm mt-1 w-100 w-md-50">
                                    <div class="header-inserzionista">
                                        {{ __('ui.contattaVenditore') }}
                                    </div>
                                    <div class="d-flex flex-column card-body border-0  body-inserzionista">
                                        <div class="d-flex justify-content-start align-items-baseline">
                                            <i class="fa-solid fa-envelope fa-sm me-2"
                                                style="color: #f3722c;"></i>{{ $announcement->user->email }}
                                        </div>
                                        @if ($announcement->user->telephone)
                                            <div class="d-flex justify-content-start align-items-baseline">
                                                <i class="fa-solid fa-phone fa-sm me-2" style="color: #f3722c;"></i>
                                                {{ $announcement->user->telephone }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="pb-5 mt-5">
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"
            class="container px-4 px-lg-5 mt-5">
            @if (count($relatedAnnouncements) > 1)
                <h2 class="fw-bolder mb-5">{{ __('ui.altriAnnunciCategoria') }}
                    {{ $announcement->category->name }}...</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
                    @foreach ($relatedAnnouncements as $relatedAnnouncement)
                        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
                            data-aos-offset="0" class="col-lg-3 mb-5">
                            <div class="card card-custom h-100 border-0">
                                <img class="card-img-top"
                                    src="{{ !$relatedAnnouncement->images()->get()->isEmpty()? $relatedAnnouncement->images()->first()->getUrl(800, 600): asset('images/noImg.jpg') }}"
                                    alt="..." />
                                <div class="card-body p-4">
                                    <a href="{{ route('category.show', $announcement->category) }}">
                                        <div class="badge bg-custom bg-gradient rounded-pill mb-2">
                                            {{ $relatedAnnouncement->category->name }}
                                        </div>
                                    </a>
                                    <a class="link-card-body"
                                        href="{{ route('announcements.show', $relatedAnnouncement) }}">
                                        <h5 class="card-title truncate  mb-3">{{ $relatedAnnouncement->title }}</h5>
                                        <p class="card-text truncate mb-0">{{ $relatedAnnouncement->body }}</p>

                                </div></a>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <p class="card-text mb-0">{{ __('ui.prezzo') }}: €
                                                    {{ $relatedAnnouncement->price }}</p>
                                                <div>{{ __('ui.inserzionista') }} <span>
                                                        {{ $relatedAnnouncement->user->name }}</span></div>
                                                <div class="text-muted">{{ __('ui.annuncioCreatoIl') }} <span>
                                                        {{ $relatedAnnouncement->created_at->format('d/m/y') }}</span>
                                                </div>
                                                <div class="pt-2">
                                                    {{-- <a href="{{ route('announcements.show', $announcement) }}">
                                                        <p>{{ __('ui.dettagli') }}</p>
                                                    </a> --}}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div> 
            @else
                <h2 class="fw-bolder mb-5">{{ __('ui.altriAnnunci') }}</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
                    @foreach ($otherAnnouncements as $announcement)
                        <div class="col-lg-3 mb-5">
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
                                    <a class="link-card-body"
                                        href="{{ route('announcements.show', $announcement) }}">
                                        <h5 class="card-title truncate  mb-3">{{ $announcement->title }}</h5>
                                        <p class="card-text truncate mb-0">{{ $announcement->body }}</p>

                                </div></a>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <p class="card-text mb-0">{{ __('ui.prezzo') }}: €
                                                    {{ $announcement->price }}</p>
                                                <div>{{ __('ui.inserzionista') }} <span>
                                                        {{ $announcement->user->name }}</span></div>
                                                <div class="text-muted">{{ __('ui.annuncioCreatoIl') }} <span>
                                                        {{ $announcement->created_at->format('d/m/y') }}</span>
                                                </div>
                                                <div class="pt-2">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                   
                </div>
            @endif
        </div>
        <div class="d-flex justify-content-center align-items-center mt-2 mb-3">
            <a class="back-ann" href="javascript:void(0);" onclick="window.history.back();">
                <i class="fa-solid fa-arrow-left fa-2xs"></i>
                <span>{{ __('ui.tornaAnnunci') }}</span>
            </a>
        </div>
    </section>
    <x-footer />
</x-layout>