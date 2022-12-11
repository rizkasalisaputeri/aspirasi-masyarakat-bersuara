<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Masyarakat Bersuara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. Yos Sudarso No.18 - 22, Kota Surabaya</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>72022714</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>Bersuara@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/home" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Masyarakat Bersuara</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/home" class="nav-item nav-link">Home</a>
                    @if (!Auth::check())

                    <a href="/registrasi" class="nav-item nav-link">Registrasi</a>
                    @endif
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alur dan Syarat</a>
                        <div class="dropdown-menu m-0">
                            <a href="/alur-dan-syarat" class="dropdown-item">Alur</a>
                            <a href="/alur-dan-syarat" class="dropdown-item">Syarat</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pelaporan</a>
                        <div class="dropdown-menu m-0">
                            <a href="/laporan-proposal" class="dropdown-item">Laporan Proposal</a>
                            <a href="/laporan-anggaran" class="dropdown-item">Laporan Anggaran</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div>
                        @if (!Auth::check())
                        <a class="btn btn-primary ms-4" href="/login" role="button">Login</a>
                        @else
                        <div class="nav=item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                              <li><a class="dropdown-item" href="#">New project...</a></li>
                              <li><a class="dropdown-item" href="#">Settings</a></li>
                              <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                            </ul>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Laporan Proposal</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Laporan Anggaran</h1>
                            <a href="/contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInCenter">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Laporan Anggaran</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Laporan Proposal</h1>
                            <a href="/contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInCenter">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Laporan Proposal</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Laporan Selesai</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Laporan Anggaran</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Masyarakat Bersuara</h5>
                        <h1 class="mb-0">About Us</h1>
                    </div>
                    <p class="mb-4">Dengan adanya Platform Bersuara ini, maka masyarakat tidak hanya
                        dapat menyuarakan aspirasi, namun juga dapat selalu memantau perkembangan dari suatu
                        aspirasi tersebut. Karena Platform ini akan selalu update perkembangan segala aspirasi baik
                        yang belum diambil alih pemerintah maupun yang sudah dalam tahap pelaksanaan. Dengan
                        diselenggarakannya Musrenbang dengan memanfaatkan media online tentu akan
                        memudahkan proses perencanaan yang melibatkan masyarakat luas dan tetap mematuhi
                        protokol Kesehatan.</p>
                    <div class="row g-0 mb-3">
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Masyarakat Bersuara</h5>
                <h1 class="mb-0">Pelaporan</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Laporan</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Pelaporan Proposal</h4>
                            <p>Untuk Proposal, Seseorang bisa mendaftarkan diri baik secara individu
                                maupun kelompok untuk mengirimkan suatu proposal...</p>
                            <a class="text-uppercase" href="/laporan-proposal">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Laporan</h3>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Laporan</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Pelaporan Anggaran</h4>
                            <p>Mekanisme input partisipasi warga yang
                                mempunyai pengaruh langsung pada keputusan anggaran...</p>
                            <a class="text-uppercase" href="/laporan-anggaran">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Masyarakat Bersuara</h5>
                <h1 class="mb-0">Alur dan Syarat</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Alur Pelaporan</h4>
                        <p class="m-0">Alur proses pelaporan masyarakat secara online.</p>
                        <a class="btn btn-lg btn-primary rounded" href="/alur-dan-syarat">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Hal - Hal yang Perlu Diperhatikan!</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">Syarat Pelaporan</h4>
                        <p class="m-0">Beberapa hal yang harus di perhatikan agar proses pelaporan berjalan dengan lancar.</p>
                        <a class="btn btn-lg btn-primary rounded" href="alur-dan-syarat">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Instansi Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Instansi</h5>
                <h1 class="mb-0">Bekerja sama dengan instansi di Pemerintah Daerah Surabaya</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                {{-- @foreach ($intansis as $instansi)
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">{{ $instansi->nama }}</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        {{ $instansi->alamat }}
                    </div>
                </div>
                @endforeach --}}
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Kesehatan</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Jemursari No. 197 Surabaya
                        Telp. (031) 8439473, 8439372
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Sumber Daya Air dan Bina Marga</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Jimerto No. 6-8 Surabaya
                        Telp. (031) 5343051-57
                        Psw. 153
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">

                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Perumahan Rakyat dan Kawasan Permukiman Serta Pertanahan
                            </h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Jimerto No. 8 Surabaya
                        Telp. (031) 5343051-57
                        Telp. (031) 5312144 Psw. 533
                        Telp. (031) 5461865
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Pemadam Kebakaran dan Penyelamatan
                            </h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Pasar Turi No. 21 Surabaya
                        Telp. (031) 3533843
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Sosial</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Arief Rahman Hakim No. 131-133 Surabaya
                        Telp. (031) 59174416
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Perindustrian dan Tenaga Kerja</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Tunjungan No. 1-3 (Eks. Gedung Siola)
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Pemberdayaan Perempuan dan Perlindungan Anak serta Pengendalian Penduduk dan Keluarga Berencana</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Kedungsari No. 18 Surabaya
                        Telp. (031) 5346317 Faks (031) 5480904
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Ketahanan Pangan dan Pertanian</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Pagesangan II / No. 56 Surabaya
                        Telp. (031) 8282328
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Lingkungan Hidup</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                    Alamat :
                    Jalan Menur 31 A Surabaya
                    Telp. 031-5967387
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Kependudukan dan Pencatatan Sipil</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Tunjungan No. 1-3 (Eks. Gedung Siola)
                        Telepon : (031) 531 8916, 531 8917, 531 8835
                        Ext. 8001,8002,8003,8004,8005,8006,8007,8008
                        Fax : (031) 531 8856
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Perhubungan</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Dukuh Menanggal No.1 Surabaya
                        Telp. (031) 8295335, 8295324 Psw. 10
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Komunikasi dan Informatika</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Jimerto 25-27 Lt. V Surabaya
                        Telp. (031) 5312144 Psw. 522
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Koperasi Usaha Kecil dan Menengah dan Perdagangan</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jl. Tunjungan No. 1-3 lt.3 (ex Gedung Siola)
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Tunjungan No. 1-3 (Eks Gedung Siola)
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Kebudayaan, Kepemudaan dan Olah Raga serta Pariwisata</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Tunjungan No.1-3 (Eks. Gedung Siola)
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dinas Perpustakaan dan Kearsipan</h4>

                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Alamat :
                        Jalan Dukuh Kupang Barat I / No. 1 B Surabaya
                        Telp. (031) 5679770
                        Jalan Rungkut Asri Tengah No. 5 - 7 Surabaya
                        Telp. (031) 8707329
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instansi End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                            <a href="/home" class="navbar-brand">
                                <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Home</h1>
                            </a>
                            <p class="mt-3 mb-4">Terimakasih telah mengunjungi website Masyarakat Bersuara. Silahkan daftarkan diri dan suarakan aspirasi Anda</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-dark">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="row gx-5">
                            <div class="col-lg-4 col-md-12 pt-5 mb-5">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="text-light mb-0">More Info</h3>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="bi bi-geo-alt text-primary me-2"></i>
                                    <p class="mb-0">Jl. Yos Sudarso No.18 - 22, Kota Surabaya</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="bi bi-envelope-open text-primary me-2"></i>
                                    <p class="mb-0">Bersuara@example.com</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="bi bi-telephone text-primary me-2"></i>
                                    <p class="mb-0">72022714</p>
                                </div>
                                <div class="d-flex mt-4">
                                    <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="text-light mb-0">Quick Links</h3>
                                </div>
                                <div class="link-animated d-flex flex-column justify-content-start">
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Alur dan Syarat</a>
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Registrasi</a>
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Pelaporan</a>
                                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="text-light mb-0">Popular Links</h3>
                                </div>
                                <div class="link-animated d-flex flex-column justify-content-start">
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Alur dan Syarat</a>
                                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Pelaporan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-white" style="background: #061429;">
            <div class="container text-center">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-md-6">
                        <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Masyarakat Bersuara 2022</a>. All Rights Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed by Tasya dan Rizka</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>
