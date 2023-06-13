@include('main.components.import')

<div class="row d-flex align-items-center vh-100 vw-100">
    <div class="col-6 container-fluid h-100 d-flex flex-column justify-content-center" style="background-color: #F5F3F4">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="d-flex justify-content-center mb-3">
                <img src="images/logo-marino-tech.png" alt="" style="height: 100px; width: 100px;">
            </div>
            
            <h2 class="text-center mb-2">Registrasi</h2>
            <p class="text-center mb-5">Masukan data-data yang diperlukan</p>
            <div class="mb-3 d-flex justify-content-center">
                <div class="col-6">
                    <input placeholder="Masukan username" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <div class="col-6">
                    <input placeholder="Masukan alamat email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <div class="col-6">
                    <input placeholder="Masukan password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <div class="col-6">
                    <input placeholder="Konfirmasi password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            

            {{-- progres --}}
            <div class="d-flex justify-content-center mb-0 text-center">
                <button type="submit" class="btn poppins fw-bold col-6 text-white" style="background-color: #FE1717">
                    {{ __('Register') }}
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
        <p class="text-center mt-4">Sudah punya akun?
            @if (Route::has('login'))
                <a class="text-decoration-none" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
        </p>
    </div>
    <div class="col-5 mx-5">
        <img src="images/login-image.png" alt="">
    </div>
</div>

