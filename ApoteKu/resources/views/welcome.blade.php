<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>ApoteKu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" type="image/x-icon" href="/img/iconfav.png">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('beranda/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('beranda/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('beranda/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('beranda/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('beranda/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('beranda/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('beranda/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{asset('beranda/css/style.css')}}" rel="stylesheet">
    <style>
        p {
            text-align: justify;
        }

        .custom-row {
            display: flex;
            align-items: center;
        }

        .custom-col {
            margin-bottom: 0 !important;
        }

        .custom-logo {
            margin-right: 10px;
        }

    </style>

</head>


<body>

    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <img src="" height="50" alt="" class="mx-2">
            <h1 class="logo me-auto"><a href="#" style="font-size: 30px"> ApoteKu</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Branda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li><a class="getstarted scrollto" href="/dashboard">Dashboard</a></li>
                    @else
                    <li><a class="getstarted scrollto" href="/login">Login</a></li>
                    @endauth
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Aplikasi ApoteKu</h1>
                    <h2></h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/login" class="btn-get-started scrollto">Mulai Sekarang!</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('beranda/img/APOTEKU.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>

    <main id="main">

        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{asset('beranda/img/skills.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" style="text-align: justify" data-aos="fade-left"
                        data-aos-delay="100">
                        <h3>Aplikasi ApoteKu</h3>
                        <p class="fst-italic">
                            ApoteKu adalah aplikasi berbasis Laravel yang dirancang khusus untuk memudahkan pengelolaan
                            apotek Anda. Dengan antarmuka yang ramah pengguna dan fitur-fitur canggih, ApoteKu membantu
                            meningkatkan efisiensi operasional dan memberikan pelayanan terbaik bagi Apotek anda.
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>FITUR</h2>
                    <p>Berikut beberapa fitur yang ada pada sistem ini</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Sistem Kasir Terintegrasi</a></h4>
                            <p><b>Penjualan Cepat dan Akurat </b> Proses transaksi penjualan obat menjadi lebih cepat
                                dengan fitur kasir yang intuitif. Cukup beberapa klik, transaksi selesai dengan catatan
                                yang terperinci. <br></p>
                            <p><b>Notifikasi Stok Rendah</b> Dapatkan notifikasi otomatis saat stok obat mendekati batas
                                minimum untuk menghindari kehabisan obat penting.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Laporan Penjualan dan Inventaris Terperinci</a></h4>
                            <p><b>Laporan Penjualan </b>Setiap laporan tercatat otomatis dan dapat dibuatkan kedalam
                                excel untuk memudahkan analaisis</p>
                            <p><br><b>Inventaris terorganisir</b> setip obat terorganisir dengan baik sehingga
                                memudahkan pengguna dalam melakukan penjualan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Manajemen Stok Obat yang Efisien</a></h4>
                            <p><b>Pemantauan Stok Real-Time</b> Lacak ketersediaan obat dengan mudah dan dapatkan
                                notifikasi otomatis saat stok menipis. <br>
                                <b>Katalog Obat yang Terorganisir </b>Simpan informasi lengkap tentang setiap obat,
                                termasuk nama, jenis, harga, dan jumlah stok. <br>
                                <b>Pengaturan Suplai Obat</b> Kelola pemasok dan riwayat suplai obat dengan mudah untuk
                                memastikan apotek selalu terisi dengan baik. <br></p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Transaksi Penjualan yang Cepat dan Mudah</a></h4>
                            <p><b>Kasir Digital</b> Proses transaksi penjualan obat dengan cepat menggunakan antarmuka
                                kasir digital yang user-friendly.
                                <b><br>Riwayat Penjualan</b> Simpan dan akses riwayat penjualan untuk analisis dan
                                laporan penjualan yang lebih baik.
                                <b><br>Faktur dan Struk Otomatis</b> Cetak faktur dan struk penjualan otomatis untuk
                                meningkatkan layanan pelanggan.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            ApoteKu adalah pilihan tepat bagi apotek modern yang ingin meningkatkan efisiensi, akurasi,
                            dan layanan pelanggan mereka. Bergabunglah dengan banyak apotek lainnya yang telah merasakan
                            manfaat ApoteKu dan bawa manajemen apotek Anda ke level berikutnya!
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Integrasi Kasir</li>
                            <li><i class="ri-check-double-line"></i> Integrasi Supply</li>
                            <li><i class="ri-check-double-line"></i> Dapat melakukan Checkup dengan Verfikasi Keaslian</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Kami juga Menyediakan fitur Checkup setiap pengguna yang melakukan checkup tersimpan
                            disistem dan juga dapat melakukan verfikasi keaslian sehingga hasil checkup kami dapat
                            digunakan untuk keperluan penting lainnya
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <footer id="footer">
            <div class="container footer-bottom clearfix">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <div class="row custom-row">
                            <div class="col-md-3 custom-col">
                                <a href=""> <img
                                        src=""
                                        height="50" alt="" class="mx-2 custom-logo"></a>

                            </div>
                            <div class="col-md-3 text-right">
                                <h4>AptoteKu</h4>
                            </div>
                        </div>
                        <div class="col-10">
                            <p>Mulailah dengan ApoteKu hari ini dan rasakan perbedaannya!</p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Berikut Sosial Media yang ada:</p>
                        <div class="sosmed" style="font-size: 30px;margin: 10px;margin:2px">
                            <a type="button" href="#"><i class="fa-brands fa-linkedin" style="color:white"></i> </a>
                            <a type="button" href="#"><i class="fa-brands fa-facebook" style="color:white"></i></a>
                            <a type="button" href="#"><i class="fa-brands fa-square-instagram"
                                    style="color:white"></i></a>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Alamat</h4>
                        <p>
                            Anggap ada alamat <br><br>
                            <strong>Telpon:</strong> 42412421<br>
                            <strong>Email:</strong>
                            2412412<br>
                        </p>

                    </div>
                </div>
            </div>
        </footer>
        <footer id="footer" style="background-color: #263857;color: white   ">
            <div class="container ">
                <div class="text-center p-2">
                    &copy; Copyright <strong><span>Aplikasi ApoteKu 2024</span></strong>.
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})

                </div>
            </div>
        </footer>


        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>


        <script src="{{asset('beranda/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('beranda/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('beranda/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('beranda/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('beranda/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('beranda/vendor/waypoints/noframework.waypoints.js')}}"></script>
        <script src="{{asset('beranda/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('beranda/js/main.js')}}"></script>
        <script src="{{asset('')}}"></script>
        <script src="{{asset('')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
            integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
