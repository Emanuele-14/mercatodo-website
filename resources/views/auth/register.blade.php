<x-auth>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h2 mb-5 mx-1 mx-md-4 mt-4">{{ __('ui.registrati') }}</p>
                                    <form class="mx-1 mx-md-4" action="{{ route('register') }}"method="POST">
                                        @method('POST')
                                        @csrf

                                        <!--name-->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="icon-color fas fa-user fa-lg me-1 fa-fw"></i>
                                            <div class="mx-2 form-outline flex-fill mb-0">
                                                <input type="text" placeholder="{{ __('ui.name') }}" name="name"
                                                    class="form-control @error('name')
                                                    is invalid
                                                    @enderror "
                                                    required value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--email-->
                                        <div class=" d-flex flex-row align-items-center mb-4">
                                            <i class="icon-color fas fa-envelope fa-lg me-1 fa-fw"></i>
                                            <div class="mx-2 form-outline flex-fill mb-0">
                                                <input type="email" id="email" placeholder="Email" name="email"
                                                    value="{{ old('email') }}"
                                                    class="form-control input-email  @error('email')
                                                    is invalid
                                                    @enderror"
                                                    required>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="mt-2"
                                                    style="color:rgba(var(--bs-danger-rgb), var(--bs-text-opacity))"
                                                    id="email-validation-status"></div>
                                            </div>
                                        </div>
                                        <!--telephone-->
                                        <div class=" d-flex flex-row align-items-center mb-4">
                                            <i class="icon-color fas fa-phone fa-lg me-1 fa-fw mb-2"
                                                style="color: #f3722c;"></i>
                                            <div class="mx-2 form-outline flex-fill mb-0">
                                                <input type="number" id="tel"
                                                    placeholder="{{ __('ui.telefono') }}" name="telephone"
                                                    value="{{ old('telephone') }}"
                                                    class="form-control  @error('telephone')
                                                    is invalid
                                                    @enderror">
                                                @error('telephone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="mt-2"
                                                    style="color:rgba(var(--bs-danger-rgb), var(--bs-text-opacity))"
                                                    id="email-validation-status"></div>
                                            </div>
                                        </div>
                                        <!--password-->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="icon-color fas fa-lock fa-lg me-1 fa-fw"></i>
                                            <div class="mx-2 form-outline flex-fill mb-0">
                                                <input type="password" placeholder="Password" name="password"
                                                    class="form-control @error('password')
                              is invalid
                            @enderror"
                                                    required>
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--password_confirmation-->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="icon-color fas fa-key fa-lg me-1 fa-fw"></i>
                                            <div class="mx-2 form-outline flex-fill mb-0">
                                                <input type="password" placeholder="{{ __('ui.confermaPassword') }}"
                                                    name="password_confirmation"
                                                    class="form-control @error('password_confirmation')
                              is invalid
                            @enderror"
                                                    required>
                                                @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mx-auto">
                                            <button type="submit"
                                                class="btn bu-orange mb-1 me-2">{{ __('ui.registrati') }}</button>
                                            <div class="d-flex flex-column align-items-center">
                                                <a class="mx-1 "
                                                    href="{{ route('login') }}">{{ __('ui.giaRegistrato') }}</a>

                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
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
        </div>
        </div>
        </div>
    </section>
</x-auth>
