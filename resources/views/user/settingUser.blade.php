
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Masyarakat Bersuara | Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib2/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib2/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap2.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style3.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>LOGIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/user" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Input Laporan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/InputLaporanProposal" class="dropdown-item">Laporan Proposal</a>
                            <a href="/InputLaporanAnggaran" class="dropdown-item">Laporan Anggaran</a>
                        </div>
                    <a href="/laporanSaya" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Laporan Saya</a>
                    <a href="/userHistory" class="nav-item nav-link "><i class="fa fa-th me-2"></i>History</a>
                    <a href="/settingUser" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Setting Profil</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        
                        <!-- Content Start -->
                        <div class="content">
                            <!-- Navbar Start -->
                            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                                </a>
                                <a href="#" class="sidebar-toggler flex-shrink-0">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <form class="d-none d-md-flex ms-4">
                                    <input class="form-control border-0" type="search" placeholder="Search">
                                </form>
                                <div class="navbar-nav align-items-center ms-auto">
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="fa fa-envelope me-lg-2"></i>
                                            <span class="d-none d-lg-inline-flex">Message</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                            <a href="#" class="dropdown-item">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                    <div class="ms-2">
                                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                        <small>15 minutes ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                    <div class="ms-2">
                                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                        <small>15 minutes ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                    <div class="ms-2">
                                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                        <small>15 minutes ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item text-center">See all message</a>
                                        </div>
                                    </div>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="fa fa-bell me-lg-2"></i>
                                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                            <a href="#" class="dropdown-item">
                                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                                <small>15 minutes ago</small>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <h6 class="fw-normal mb-0">New user added</h6>
                                                <small>15 minutes ago</small>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <h6 class="fw-normal mb-0">Password changed</h6>
                                                <small>15 minutes ago</small>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                                        </div>
                                    </div>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <span class="d-none d-lg-inline-flex">John Doe</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                            <a href="/biodata" class="dropdown-item">My Profile</a>
                                            <a href="/setting" class="dropdown-item">Settings</a>
                                            <a href="/home" class="dropdown-item">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            <!-- Navbar End -->
                            <div class="wrapper bg-white mt-sm-5">
                                <h4 class="pb-4 border-bottom">Account settings</h4>
                                <div class="d-flex align-items-start py-3 border-bottom">
                                    <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="img" alt="">
                                    <div class="pl-sm-4 pl-2" id="img-section">
                                        <b>Profile Photo</b>
                                        <p>Accepted file type .png. Less than 1MB</p>
                                        <button class="btn button border"><b>Upload</b></button>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="bg-light form-control" placeholder="Steve">
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="bg-light form-control" placeholder="Smith">
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            <label for="email">Email Address</label>
                                            <input type="text" class="bg-light form-control" placeholder="steve_@email.com">
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015">
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            <label for="country">Country</label>
                                            <select name="country" id="country" class="bg-light">
                                                <option value="india" selected>India</option>
                                                <option value="usa">USA</option>
                                                <option value="uk">UK</option>
                                                <option value="uae">UAE</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3" id="lang">
                                            <label for="language">Language</label>
                                            <div class="arrow">
                                                <select name="language" id="language" class="bg-light">
                                                    <option value="english" selected>English</option>
                                                    <option value="english_us">English (United States)</option>
                                                    <option value="enguk">English UK</option>
                                                    <option value="arab">Arabic</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3 pb-4 border-bottom">
                                        <button class="btn btn-primary mr-3">Save Changes</button>
                                        <button class="btn border button">Cancel</button>
                                    </div>
                                    <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                                        <div>
                                            <b>Deactivate your account</b>
                                            <p>Details about your company account and password</p>
                                        </div>
                                        <div class="ml-auto">
                                            <button class="btn danger">Deactivate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">Masyarakat Bersuara</a>, All Right Reserved. 
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By Tasya & Rizka</a>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Template Javascript -->
<script src="js/main2.js"></script>
</body>

</html>