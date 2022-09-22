<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Masyarakat Bersuara | Registrasi</title>
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
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>Bersuara@example.com</small>
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
                        <a href="/registrasi" class="nav-item nav-link active">Registrasi</a>
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
                    <button data-bs-toggle="modal" data-bs-target="#login" class="btn btn-primary py-2 px-4 ms-3">Login</button>
                </div>
            </nav>
        <!-- Navbar End -->
    
        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                          <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Saved Password</label>
                          </div>
                          <a href="">Forgot Password</a>
                      </div>
                      <a href="/user" button type="submit" class="btn btn-primary">Submit</button></a>
                      <p class="text-center mb-0">Belum punya akun? <a href="/registrasi">Registrasi</a></p>
                  </form>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Registrasi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-6">
                      <div class="p-5">
                        <h3 class="fw-normal mb-5">General Infomation</h3>
      
                        <div class="form-outline">
                            <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplev2">Asal Instansi</label>
                          </div>
      
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplev2">Nama Depan</label>
                            </div>
      
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplev3">Nama Belakang</label>
                            </div>
      
                          </div>
                        </div>

                        <div class="mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" id="form3Examplev4" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplev4">Jabatan</label>
                          </div>
                        </div>
      
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
      
                            <div class="form-outline">
                              <input type="text" id="form3Examplev5" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplev5">NIP/NIK</label>
                            </div>
      
                          </div>
                          <div class="col-md-6">
      
                          </div>
                        </div>
      
                      </div>
                    </div>
                    <div class="col-lg-6 bg-indigo text-black">
                      <div class="p-5">
                        <h3 class="fw-normal mb-5">Contact Details</h3>
      
                        <div class="mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplea2">Alamat</label>
                          </div>
                        </div>
      
                        <div class="mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplea3">RT/RW</label>
                          </div>
                        </div>
      
                        <div class="row">
                          <div class="col-md-5 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplea4">Kelurahan/Desa</label>
                            </div>
      
                          </div>
                          <div class="col-md-7 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplea5">Kecamatan</label>
                            </div>
      
                          </div>
                        </div>
      
                        <div class="mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="text" id="form3Examplea6" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplea6">Kode Pos</label>
                          </div>
                        </div>
      
                        <div class="row">
                          <div class="col-md-5 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplea7">Nomor Telp</label>
                            </div>
      
                          </div>
                          <div class="col-md-7 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="text" id="form3Examplea8" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplea8">Password</label>
                            </div>
      
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                          <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label text-black" for="form2Example3">
                            I do accept the <a href="#!" class="text-black"><u>Terms and Conditions</u></a> of your
                            site.

                          </label>
                        </div>
      
                        <a href="/verifikasi" button type="button" class="btn btn-light btn-lg"
                          data-mdb-ripple-color="dark">Register</button> </a>
      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
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

    </html><?php /**PATH C:\applications\aspirasi-masyarakat-bersuara\resources\views/regist.blade.php ENDPATH**/ ?>