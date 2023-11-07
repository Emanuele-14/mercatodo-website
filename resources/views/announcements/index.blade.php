<x-layout>
    <x-navbar />
    <header class="bg-header pt-5 pb-3">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center ">
                <h3 class="fw-bold text-black mb-0">{{ __('ui.Iltuo') }} <span class="fw-light">
                        {{ __('ui.tiBasta') }}</span>
                </h3>
            </div>
        </div>
    </header>
    <!--search section-->
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
                        <button class="btn bu-orange fw-light rounded-pill px-3 mx-2"
                            type="submit">{{ __('ui.cerca') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <!--card section-->

        <section class="pb-1">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    @forelse ($announcements as $announcement)
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

                        </div> <!--endcard-->
                    @empty
                        <div class="d-flex justify-content-center align-items-center flex-column mb-5 pb-5">
                            <i class=" mb-3 fa-regular fa-face-frown fa-2xl"></i>
                            <h1>{{ __('ui.ops') }}</h1>
                            <a class="mt-2" href="{{ route('announcements.create') }}">
                                <h6>{{ __('ui.inserisciPerPrimo') }}</h6>
                            </a>
                            <span>{{ __('ui.oppure') }} <a class="text-decoration-underline"
                                    href="{{ route('homepage') }}">{{ __('ui.tornaAnnunci') }}</a></span>
                        </div>
                    @endforelse
                    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"
                        class="paginate">{{ $announcements->links() }}</div>

                    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"
                        class="d-flex justify-content-center mt-5">
                        <a class="mx-1" href="{{ route('homepage') }}">{{ __('ui.tornaHome') }}</a>
                    </div>
                </div>
            </div>
        </section>
        <x-footer />
</x-layout>
