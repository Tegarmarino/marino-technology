@include('main.components.import')

<div class="row d-flex align-items-center vh-100 vw-100">
    <div class="col-6 container-fluid h-100 d-flex flex-column justify-content-center" style="background-color: #F5F3F4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="d-flex justify-content-center mb-3">
                <img src="images/logo-marino-tech.png" alt="" style="height: 100px; width: 100px;">
            </div>
            
            <h2 class="text-center mb-2">Selamat datang</h2>
            <p class="text-center mb-5">Masukkan email dan password anda</p>
            <div class="mb-3 d-flex justify-content-center">
                <div class="col-6">
                    <input placeholder="Masukan alamat email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <div class="col-6">
                    <input placeholder="Masukan password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Ingat saya') }}
                        </label>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            

            <div class="d-flex justify-content-center mb-0 text-center">
                <button type="submit" class="btn poppins fw-bold col-6 text-white" style="background-color: #FE1717">
                    {{ __('Login') }}
                </button>
            </div>
            <p class="my-4 text-center">ATAU</p>
        </form>
        <div class="d-flex justify-content-center mb-0 text-center">
            <button type="submit" class="btn poppins fw-bold col-6 text-white btn-light" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="images/google-logo.png" class="me-2" style="width: 18px; height: 18px;" alt="">
                    <a href="{{ route('google-auth') }}" class="text-decoration-none text-dark">
                        Lanjutkan dengan google
                    </a>
                </div>
            </button>
        </div>
        <p class="text-center mt-4">Belum punya akun?
            @if (Route::has('register'))
                <a class="text-decoration-none" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        </p>
    </div>
    <div class="col-5 mx-5">
        <img src="images/login-image.png" alt="">
    </div>
</div>
