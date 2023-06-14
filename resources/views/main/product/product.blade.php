@include('main.components.import')
{{-- Product --}}
    <div style="padding-left: 100px; padding-right: 100px;">
        <p id="project" class="color-onyx poppins fw-bold text-center"
            style="font-size: 30px; padding-top: 100px; padding-bottom: 50px;">Project terbaru kami</p>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    @foreach ($projects as $index => $val)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="text-center mb-4">
                                <a href="http://{{ $val->link }}" class="text-decoration-none poppins fw-bold f-4" target="_blank">
                                    {{ $val->name }}
                                </a>
                            </div>
                            <div class="position-relative">
                                <img src="projects_image/{{ $val->image }}" class="d-block mx-auto img-fluid" alt="..." style="width: 90%; height: auto; max-height: 500px; border-radius: 30px;">
                                <button class="carousel-control-prev" type="service-button" data-bs-target="#carouselExample" data-bs-slide="prev" style="left: -40px;">
                                    <span class="carousel-control-prev-icon text-danger" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="service-button" data-bs-target="#carouselExample" data-bs-slide="next" style="right: -40px;">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            
        
        
    </div>
    <div class="red-shape mt-5" style="height: 250px;">
        <div style="padding-left: 190px; padding-top: 50px;">
            <p class="poppins fw-bold" style="font-size: 30px; color:#FDFDFF;">Tertarik dengan jasa kami?</p>
            <p class="poppins fw-bold" style="font-size: 30px; color:#FDFDFF;">Hubungi kami sekarang</p>
            <a href="https://wa.me/6285785159740?text=Saya%20tertarik%20dengan%20jasa%20pembuatan%20website%20dari%20marino%20technology" class="text-decoration-none service-button poppins fw-bold color-onyx" target="blank" style="background-color: #FDFDFF; border:none;">Hubungi kami</a>
        </div>
    </div>
<section id="product">
    <div style="padding-left: 100px; padding-right: 100px;">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column" style="padding-top: 100px; width: 700px;">
                <p class="poppins fw-bold color-onyx text-center" style="font-size: 32px;">Pilih paket website regular
                </p>
                <p class="poppins color-onyx text-center">Website regular adalah website sederhana yang dibuat bukan
                    untuk kebutuhan berjualan atau bisnis.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="service-card col-3 mx-5" style="width: 300px; height: 480px; padding: 10px; margin-top: 60px;">
                <p class="text-center poppins color-onyx" style="font-size: 20px; padding-top: 40px;">Biasa</p>
                <p class="poppins fw-bold color-onyx text-center" style="font-size: 32px;">Rp 300.000</p>
                <div class="row" style="padding-left: 38px; padding-top: 30px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">2 Halaman website</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">Desain custom</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">1x Revisi</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">Gratis domain</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">Konsultasi gratis</p>
                </div>
                <p class="poppins color-onyx" style="padding-left: 38px;">Baca <a class="color-red">syarat</a> dan <a
                        class="color-red">ketentuan</a></p>
                <button class="service-button btn-block poppins fw-bold"
                    style="background-color: #FE1717; width: 100%; border: none; border-radius: 30px;">
                    <a href="https://wa.me/6285785159740?text=Saya%20ingin%20menggunakan%20paket%20jasa%20marino%20technology%20website%20regular%20yang%20biasa" target="blank" class="text-decoration-none" style="color:#FDFDFF;">
                        Pilih
                    </a>
                </button>
            </div>
            {{-- Paling laris --}}
            <div class="best-seller-service-card-outer col-3 mx-5" style="width: 300px; height: 540px;">
                <p class="popins fw-bold text-center" style="padding-top: 15px; font-size: 20px; color:#FDFDFF;">
                    Paling laris</p>
                <div class="best-seller-service-card-inner d-flex flex-column justify-content-end"
                    style="height: 480px%; padding: 10px; margin-left: -12px; margin-right: -12px;">
                    <p class="text-center poppins color-onyx" style="font-size: 20px; padding-top: 40px;">Biasa</p>
                    <p class="poppins fw-bold color-onyx text-center" style="font-size: 32px;">Rp 300.000</p>
                    <div class="row" style="padding-left: 38px; padding-top: 30px;">
                        <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                        <p class="col-8">2 Halaman website</p>
                    </div>
                    <div class="row" style="padding-left: 38px;">
                        <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                        <p class="col-8">Desain custom</p>
                    </div>
                    <div class="row" style="padding-left: 38px;">
                        <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                        <p class="col-8">1x Revisi</p>
                    </div>
                    <div class="row" style="padding-left: 38px;">
                        <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                        <p class="col-8">Gratis domain</p>
                    </div>
                    <div class="row" style="padding-left: 38px;">
                        <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                        <p class="col-8">Konsultasi gratis</p>
                    </div>
                    <p class="poppins color-onyx" style="padding-left: 38px;">Baca <a class="color-red">syarat</a>
                        dan <a class="color-red">ketentuan</a></p>
                    <button class="service-button btn-block poppins fw-bold"
                        style="color:#FDFDFF; background-color: #FE1717; width: 100%; border: none; border-radius: 30px;">
                        <a href="https://wa.me/6285785159740?text=Saya%20ingin%20menggunakan%20paket%20jasa%20marino%20technology%20website%20regular%20yang%20menengah" target="blank" class="text-decoration-none" style="color:#FDFDFF;">
                            Pilih
                        </a>
                    </button>
                </div>
            </div>

            <div class="service-card col-3 mx-5" style="width: 300px; height: 480px; padding: 10px; margin-top: 60px;">
                <p class="text-center poppins color-onyx" style="font-size: 20px; padding-top: 40px;">Biasa</p>
                <p class="poppins fw-bold color-onyx text-center" style="font-size: 32px;">Rp 300.000</p>
                <div class="row" style="padding-left: 38px; padding-top: 30px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">2 Halaman website</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">Desain custom</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">1x Revisi</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">Gratis domain</p>
                </div>
                <div class="row" style="padding-left: 38px;">
                    <img src="images/check.png" class="col-3" style="height: 20px; width: 48px;" alt="">
                    <p class="col-8">Konsultasi gratis</p>
                </div>
                <p class="poppins color-onyx" style="padding-left: 38px;">Baca <a class="color-red">syarat</a> dan <a
                        class="color-red">ketentuan</a></p>
                <button class="service-button btn-block poppins fw-bold"
                    style="color:#FDFDFF; background-color: #FE1717; width: 100%; border: none; border-radius: 30px;">
                    <a href="https://wa.me/6285785159740?text=Saya%20ingin%20menggunakan%20paket%20jasa%20marino%20technology%20website%20regular%20yang%20ahli" target="blank" class="text-decoration-none" style="color:#FDFDFF;">
                        Pilih
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>