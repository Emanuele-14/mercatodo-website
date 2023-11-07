<x-auth>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-2">
                                    <p class="text-center h2 mb-5 mx-1 mx-md-4 mt-4">{{ __('ui.accedi') }}</p>
                                    <form class="mx-1 mx-md-4" action="{{ route('login') }}" method="POST">
                                        @method('POST')
                                        @csrf

                                        <div class="d-flex  flex-row align-items-center mb-4">
                                            <i class="icon-color fas fa-envelope fa-lg me-1 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0 ">
                                                <input type="email" placeholder="Email" name="email"
                                                    class="form-control @error('email')
                                                        is invalid
                                                    @enderror" />

                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="icon-color fas fa-lock fa-lg me-1 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" placeholder="Password" name="password"
                                                    class="form-control @error('password')
                                                        is invalid
                                                    @enderror" />

                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mx-auto">
                                            <button type="submit"
                                                class="btn bu-orange mb-1 ms-1">{{ __('ui.accedi') }}</button>
                                            <div class="d-flex flex-column align-items-center  ">
                                                <a class="mx-1"
                                                    href="{{ route('register') }}">{{ __('ui.nonRegi') }}</a>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-1">
                                    {{-- Qui Logo --}}
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="{{ route('homepage') }}">{{ __('ui.tornaHome') }}</a>
                </div>
            </div>

        </div>
    </section>
</x-auth>
