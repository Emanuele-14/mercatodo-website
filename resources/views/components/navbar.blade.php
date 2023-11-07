<nav class="navbar navbar-expand-lg bg-white  shadow-sm sticky" style="">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('images/Logo.png') }}" width="150px"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @guest
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}"
                            aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" id="categoryDrop" data-bs-toggle="dropdown"
                            aria-expanded="false" href="#">{{ __('ui.categorie') }}</a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDrop">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('category.show', compact('category')) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-1">
                    <li class="nav-item">
                        <a class="nav-link  px-0" href="{{ route('login') }}">{{ __('ui.accedi') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('ui.registrati') }}</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('login') }}"
                            class="my-1 ms-1 me-1 btn bu-orange btn-sm rounded-pill  {{ Route::currentRouteName() == 'announcements.create' ? 'disabled' : '' }}"
                            type="submit"><i class="fa-solid fa-circle-plus " style="color: white;"></i>
                            {{ __('ui.inserisciAnnuncio') }}
                        </a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}"
                                    aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" id="categoryDrop"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    href="#">{{ __('ui.categorie') }}</a>
                                <ul class="dropdown-menu" aria-labelledby="categoryDrop">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('category.show', compact('category')) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>


                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#" role="button">
                                    {{ __('ui.ciao') }} {{ Auth::user()->name }}!
                                </a>
                                @if (!Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a href="{{ route('announcements.create') }}"
                                    class="my-1 ms-1 me-1 btn bu-orange btn-sm rounded-pill {{ Route::currentRouteName() == 'announcements.create' ? 'disabled' : '' }}"
                                    type="submit"><i class="fa-solid fa-circle-plus " style="color: white;"></i>
                                    {{ __('ui.inserisciAnnuncio') }}
                                </a>
                            </li>
                            @endif
                            @if (Auth::user()->is_revisor)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('revisor.index') }}">{{ __('ui.zonaRevisore') }}
                                        <span class=" badge bu-orange rounded-pill bg-secondary">
                                            {{ App\Models\Announcement::toBeRevisionedCount() }}
                                            <span class="visually-hidden">unread message</span>
                                        </span>
                                    </a>
                                </li>
                            @endif

                            </li>
                        </ul>
                        </li>
                </ul>
            </div>
        </div>
    @endguest
</nav>
