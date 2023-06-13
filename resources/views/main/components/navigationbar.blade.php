@extends('main.components.import')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="images/logo-marino-tech.png" style="height:70px;">
        <a class="navbar-brand ps-2 poppins fw-bold dark-color" style="font-size: 24px;" href="#home">Marino technology</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" aria-current="page" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold" href="#product">Layanan</a>
                </li>
                <!-- Right Side Of Navbar -->
                <ul class="">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <a class="nav-link px-4 fw-bold outline-button" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle poppins fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </ul>
        </div>
    </div>
</nav>
