@include('main.components.import')
{{-- Product --}}
    <div style="padding-left: 100px; padding-right: 100px;">
        <p id="project" class="dark-color poppins fw-bold text-center"
            style="font-size: 30px; padding-top: 100px; padding-bottom: 50px;">Project terbaru kami</p>
        <div class="overflow-auto d-flex justify-content-center" style="white-space: nowrap;">
            <div class="d-flex flex-nowrap">
                <div class="col" style="margin-right: 150px;">
                    <p>item 1</p>
                </div>
                <div class="col" style="margin-right: 150px;">
                    <p>item 2</p>
                </div>
                <div class="col" style="margin-right: 150px;">
                    <p>item 3</p>
                </div>
                <div class="col" style="margin-right: 150px;">
                    <p>item 4</p>
                </div>
                <div class="col" style="margin-right: 150px;">
                    <p>item 5</p>
                </div>
                <!-- Tambahkan lebih banyak kolom item di sini -->
            </div>
        </div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                
                @foreach ($projects as $index => $val)
                    <div class="carousel-item active">
                        <img src="projects_image/{{ $val->image }}" class="d-block w-100" alt="..." style="width: 1125px; height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="images/tablet.png" class="d-block w-100" alt="..." style="width: 1125px; height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="images/welcome.png" class="d-block w-100" alt="..." style="width: 1125px; height: 500px;">
                    </div>
                @endforeach  
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="red-shape" style="height: 250px;">
        <div style="padding-left: 190px; padding-top: 50px;">
            <p class="poppins fw-bold" style="font-size: 30px; color:#FDFDFF;">Tertarik dengan jasa kani?</p>
            <p class="poppins fw-bold" style="font-size: 30px; color:#FDFDFF;">Hubungi kami sekarang</p>
            <a href="https://wa.me/6285785159740?text=Saya%20tertarik%20dengan%20jasa%20pembuatan%20website%20dari%20marino%20technology" class="text-decoration-none button poppins fw-bold dark-color" target="blank" style="background-color: #FDFDFF; border:none;">Hubungi kami</a>
        </div>
    </div>
<section id="product">
    <div style="padding-left: 100px; padding-right: 100px;">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column" style="padding-top: 100px; width: 700px;">
                <p class="poppins fw-bold dark-color text-center" style="font-size: 32px;">Pilih paket website regular
                </p>
                <p class="poppins dark-color text-center">Website regular adalah website sederhana yang dibuat bukan
                    untuk kebutuhan berjualan atau bisnis.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="pricing-shape col-3 mx-5" style="width: 300px; height: 480px; padding: 10px; margin-top: 60px;">
                <p class="text-center poppins dark-color" style="font-size: 20px; padding-top: 40px;">Biasa</p>
                <p class="poppins fw-bold dark-color text-center" style="font-size: 32px;">Rp 300.000</p>
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
                <p class="poppins dark-color" style="padding-left: 38px;">Baca <a class="red-color">syarat</a> dan <a
                        class="red-color">ketentuan</a></p>
                <button class="button btn-block poppins fw-bold"
                    style="background-color: #FE1717; width: 100%; border: none; border-radius: 30px;">
                    <a href="https://wa.me/6285785159740?text=Saya%20ingin%20menggunakan%20paket%20jasa%20marino%20technology%20website%20regular%20yang%20biasa" target="blank" class="text-decoration-none" style="color:#FDFDFF;">
                        Pilih
                    </a>
                </button>
            </div>
            {{-- Paling laris --}}
            <div class="paling-laris-shape-outer col-3 mx-5" style="width: 300px; height: 540px;">
                <p class="popins fw-bold text-center" style="padding-top: 15px; font-size: 20px; color:#FDFDFF;">
                    Paling laris</p>
                <div class="paling-laris-shape-inner d-flex flex-column justify-content-end"
                    style="height: 480px%; padding: 10px; margin-left: -12px; margin-right: -12px;">
                    <p class="text-center poppins dark-color" style="font-size: 20px; padding-top: 40px;">Biasa</p>
                    <p class="poppins fw-bold dark-color text-center" style="font-size: 32px;">Rp 300.000</p>
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
                    <p class="poppins dark-color" style="padding-left: 38px;">Baca <a class="red-color">syarat</a>
                        dan <a class="red-color">ketentuan</a></p>
                    <button class="button btn-block poppins fw-bold"
                        style="color:#FDFDFF; background-color: #FE1717; width: 100%; border: none; border-radius: 30px;">
                        <a href="https://wa.me/6285785159740?text=Saya%20ingin%20menggunakan%20paket%20jasa%20marino%20technology%20website%20regular%20yang%20menengah" target="blank" class="text-decoration-none" style="color:#FDFDFF;">
                            Pilih
                        </a>
                    </button>
                </div>
            </div>

            <div class="pricing-shape col-3 mx-5" style="width: 300px; height: 480px; padding: 10px; margin-top: 60px;">
                <p class="text-center poppins dark-color" style="font-size: 20px; padding-top: 40px;">Biasa</p>
                <p class="poppins fw-bold dark-color text-center" style="font-size: 32px;">Rp 300.000</p>
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
                <p class="poppins dark-color" style="padding-left: 38px;">Baca <a class="red-color">syarat</a> dan <a
                        class="red-color">ketentuan</a></p>
                <button class="button btn-block poppins fw-bold"
                    style="color:#FDFDFF; background-color: #FE1717; width: 100%; border: none; border-radius: 30px;">
                    <a href="https://wa.me/6285785159740?text=Saya%20ingin%20menggunakan%20paket%20jasa%20marino%20technology%20website%20regular%20yang%20ahli" target="blank" class="text-decoration-none" style="color:#FDFDFF;">
                        Pilih
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>