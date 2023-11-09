<footer class="container-fluid bg-white px-0">
    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
    data-aos-offset="0" class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4 footer-item">
                <a class="a-category" href="{{ route('homepage') }}" class="d-inline-block mb-3">
                    <img src="{{ asset('images/Logo.png') }}" width="200px" alt="">
                </a>
                <div class="text-center ">
                    <h5 class="fw-bold text-black mb-0">{{__('ui.trova')}} <span class="fw-normal">{{__('ui.semplice')}}</span>
                    </h5>
                </div>
            </div>
            <div style="display: flex;flex-direction: column;align-items: center;" class="col-md-6 col-lg-4">
                <h5 class="mb-4 fw-bold text-black">{{__('ui.comeContattarci')}}</h5>
                <p><i class="color-custom fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class=" color-custom fa fa-envelope me-3"></i>Mercatodo@example.com</p>


                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-social me-1" target="_blank" href="https://aulab.it/"><i class="fa-brands fa-x-twitter"></i></a>

                    <a class="btn btn-square btn-social me-1" target="_blank" href="https://aulab.it/"><i
                            class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-square btn-social me-1" target="_blank" href="https://aulab.it/"><i
                            class="fab fa-instagram"></i></a>

                    <a class="btn btn-square btn-social me-1" target="_blank" href="https://aulab.it/"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 footer-item">
                <h5 class="mb-4 fw-bold text-black">{{__('ui.categorieAnnunci')}}</h5>
                @forelse ($categories as $category)
                    <a href="{{ route('category.show', compact('category')) }}"><span
                            class="pe-2">{{ $category->name }}</span></a>
                @empty
                    <h3>{{__('ui.noCategorie')}}</h3>
                @endforelse


            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center bg-light py-3">
        <div class="copyright">
            <div class="row">
                @if(auth()->guest() || (auth()->check() && auth()->user()->is_revisor == 0))
                <div class="col-12 text-center text-md-center mb-3 mb-md-2">
                    <a class="text-decoration-underline" href="{{ route('become.revisor') }}">{{__('ui.diventaRevisore')}}</a>
                </div>
                @endif
           
                <div class="col-12 text-center text-md-center mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ route('homepage') }}">Tap&Go </a> - {{__('ui.reserved')}}
                </div>

            </div>
        </div>
    </div>
</footer>