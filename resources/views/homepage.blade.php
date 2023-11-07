<x-layout>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center mb-5">
                <div class="container border-3">
                    <form action="{{ route('announcements.search') }}" method="GET" class="d-flex" role="search">
                        <div
                            class="container d-flex justify-content-center align-items-center border border-3 rounded-pill">
                            <i class="fa-solid fa-magnifying-glass" style="color: #dbd3d0;"></i>
                            <input name="searched" class="form-control me-2 border border-0 ps-1 input-focus"
                                type="search" placeholder="{{ __('ui.cercaIn') }}" aria-label="Search">
                        </div>
                        <button id="btn" class="btn bu-orange fw-light rounded-pill px-3 mx-2"
                            type="submit">{{ __('ui.cerca') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <!--ultimi annunci-->
        <section class="pb-1">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center mb-5">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder text-black ">{{ __('ui.ultimiAnnunci') }}</h2>
                        </div>
                        <hr class="mb-0">
                    </div>
                </div>
                <div class="row gx-5">
                    @foreach ($announcements as $announcement)
                        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
                            data-aos-offset="0" class="col-lg-3 mb-5">
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
                                                    <span>{{ $announcement->user->name }}</span></div>
                                                <div class="text-muted">{{ __('ui.annuncioCreatoIl') }}
                                                    {{ $announcement->updated_at->format('d/m/y') }} <br> </div>
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

                        </div> <!--endcard-->
                    @endforeach
                </div>
                <div class="container d-flex justify-content-center">
                    <a class="btn bg-custom py-2 px-4 text-white rounded-pill"
                        href="{{ route('announcements.index') }}">
                        {{ __('ui.tuttiAnnunci') }}
                    </a>
                </div>
            </div>
        </section>
        <!--section adv-->
        <section class="pt-2">
            <div class="container px-lg-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
                data-aos-offset="0">
                <div class="container-fluid py-5">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6">
                                <img class="img-fluid" src="images/payments.png">
                            </div>
                            <div class="col-lg-6 ">
                                <h1 class="mb-4 text-black fw-bold">{{ __('ui.manteniamo') }}<span
                                        class="fw-light text-dark">{{ __('ui.affari') }}</span></h1>
                                <p class="mb-4">{{ __('ui.homeMessage') }}
                                </p>
                                <p class="mb-4">{{ __('ui.homeMessage2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
</x-layout>