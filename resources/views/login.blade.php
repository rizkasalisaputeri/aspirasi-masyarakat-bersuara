<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Masyarakat Bersuara | Login</title>
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
    <!-- Copyright -->
    <div class="copyright" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small" style="color: white;text-align:center;">Copyright © Camp404</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
        
    <!-- Scripts -->

<!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="https://camp404.com/js/jquery.min.js"></script> 

<!-- Popper tooltip library for Bootstrap -->
<script src="https://camp404.com/js/popper.min.js"></script> 
<script src="https://camp404.com/js/bootstrap.min.js"></script> 

<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="https://camp404.com/js/jquery.easing.min.js"></script> 

<!-- Swiper for image and text sliders -->
<script src="https://camp404.com/js/swiper.min.js"></script> 

<!-- Magnific Popup for lightboxes -->
<script src="https://camp404.com/js/jquery.magnific-popup.js"></script> 

<!-- Morphtext rotating text in the header -->
<script src="https://camp404.com/js/morphext.min.js"></script> 

<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="https://camp404.com/js/validator.min.js"></script> 
<script src="https://camp404.com/js/validator.min.js"></script> 

<!-- Custom scripts -->
<script src="https://camp404.com/js/scripts.js"></script> 

<!-- Sweet Alert for Pop up -->
<!-- <script src="https://camp404.com/plugins/sweetalert2.all.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> -->
<script src="https://camp404.com/plugins/sweet-alert2/sweetalert2.all.min.js"></script> 



            <!--  -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#load-modal-message').modal('hide');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#loginForm').on('submit', function(e) {
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                type: $this.attr('method'),
                url: $this.attr('action'),
                data: $this.serializeArray(),
                beforeSend: function() {
                    $('#login-modal').removeClass('show');
                },
                error: function(response) {
                    $('#login-modal').addClass('show');
                    $('#login-password-error').html(response.responseJSON.errors);
                },
                success: function(response) {

                    var role = response.role;
                    $('#login-modal').removeClass('show');
                    $('#load-modal-message').modal('show');
                    $('#loginForm')[0].reset();

                    location.reload();
                }
            });
        });


        $('#registerForm').on('submit', function(e) {
            e.preventDefault();
            var $this = $(this);

            $.ajax({
                type: $this.attr('method'),
                url: $this.attr('action'),
                data: $this.serializeArray(),

                success: function(response) {
                    $('#name-error').empty();
                    $('#email-error').empty();
                    $('#phone-error').empty();
                    $('#password-error').empty();
                    if (response.errors) {
                        if (response.errors.name) {
                            $('#name-error').html(response.errors.name[0]);
                        } else if (response.errors.email) {
                            $('#email-error').html(response.errors.email[0]);
                        } else if (response.errors.phone) {
                            $('#phone-error').html(response.errors.phone[0]);
                        } else if (response.errors.password) {
                            $('#password-error').html(response.errors.password[0]);
                        } else {
                            $('#password-error').html(response.errors);
                        }
                    }

                    if (response.success) {
                        $('#registerForm')[0].reset();
                        if (response.redirect == 'back') {
                            location.reload();
                        } else {
                            window.location.href = "https://camp404.com/regredirectTo"
                        }

                        $('#registerForm')[0].reset();
                        $('#register-modal').addClass('active').removeClass('fade')
                        $('.success-response').html(response.success);
                        $('.success-response').removeClass('hide');
                    }
                }
            });
        });

        $("[data-trigger]").on("click", function() {
            var trigger_id = $(this).attr('data-trigger');
            $(trigger_id).toggleClass("show");
            $('body').toggleClass("offcanvas-active");
        });

        // close button
        $(".btn-close").click(function(e) {
            $(".navbar-collapse").removeClass("show");
            $("body").removeClass("offcanvas-active");
        });

        // function printErrorMsg (msg) {
        //     $(".print-error-msg").find("ul").html('');
        //     $(".print-error-msg").css('display','block');
        //     $.each( msg, function( key, value ) {
        //         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        //     });
        // }
    </script>

    <!-- Daftar Batch Seciton -->
    <script>
        $(document).on('click', '.submit-program', function(e) {
            const button = $(this);
            e.preventDefault();
            var formData = new FormData(button.parentsUntil('.login-form').last()[0]);
            $.ajax({
                type: "POST",
                url: "https://camp404.com/student/program/daftar",
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log("here");
                    if (data.success == true) {
                        swal({
                            title: "Terima Kasih!",
                            text: "Anda telah terdaftar!",
                            type: "success",
                        });
                    } else {
                        swal({
                            title: "Anda sudah terdaftar di program ini!",
                            text: "silahkan untuk memilih program lainnya :)",
                            type: "error",
                        });
                    }
                }
            });
        });
    </script>

    <!--  -->
    <script>
        function back() {
            $('#register-modal').modal('hide');
            $('#login-modal').modal('show');
        }

        // function register() {
        //     $('#register-modal').modal('show');
        //     $('#login-modal').modal('hide');
        // }

        function batch() {
            $('#batch-modal').modal('show');
            $('#login-modal').modal('hide');
        }

        function kembali() {
            $('#batch-modal').modal('toggle');
        }
    </script>
            <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                                    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<!--  -->
<script>
    (function($) {
        // manual carousel controls
        $('.next').click(function() {
            $('.carousel').carousel('next').carousel('pause');
            return false;
        });
        $('.prev').click(function() {
            $('.carousel').carousel('prev').carousel('pause');
            return false;
        });
    })(jQuery);
</script>


<!--  -->
<script>
    function back() {
        $('#register-modal').modal('hide');
        $('#login-modal').modal('show');
    }

    function register() {
        $('#register-modal').modal('show');
        $('#login-modal').modal('hide');
    }
</script>

<script>
    $(document).ready(function() {
        var status = document.getElementById('is_open').value;

        if (status == 1) {
            $('#batch-modal').modal('show');
        }

    });
</script>

<script>
    $('.counter-count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>

<!-- Initialize Swiper -->
<script>
    var photoThumbs = new Swiper('.testimoni-photo-container', {
        effect: 'coverflow',
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        simulateTouch: true,
        slidesPerView: '2',
        coverflowEffect: {
            rotate: 1,
            stretch: 0,
            depth: 270,
            modifier: 2,
            slideShadows: true,
        },
        pagination: {
            el: '.testimoni-photo-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    // var cardThumbs = new Swiper('.card-slider', {
    //     effect: 'coverflow',
    //   centeredSlides: true,
    //   loop: true,
    //   simulateTouch:false,
    //   slidesPerView: '2',
    //   coverflowEffect: {
    //     rotate: 1,
    //     stretch: 0,
    //     depth:100,
    //   }
    // });

    // var quotes = new Swiper('.testimoni-quote-container', {
    //   loop: true,
    //   autoplay: {
    //     delay: 4000,
    //     disableOnInteraction: false,
    //   },
    //   thumbs: {
    // 	swiper: photoThumbs
    //   },
    //   pagination: {
    //     el: '.quote-pagination',
    //     clickable: true,
    //   }
    // });

    var photoThumbsMobile = new Swiper('.mobile-testimonial .testimoni-photo-container', {
        effect: 'coverflow',
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: true,
        },
        allowTouchMove: false,
        simulateTouch: false,
        slidesPerView: '2',
        coverflowEffect: {
            rotate: 1,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true,
        },
    });

    var quotes = new Swiper('.mobile-testimonial .testimoni-quote-container', {
        loop: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: true,
        },
        thumbs: {
            swiper: photoThumbsMobile
        },
    });
</script>

<script>
    $(".testimoni-link").click(function() {
        $('html,body').animate({
                scrollTop: $(".testimoni-title").offset().top - 100
            },
            'slow');
    });
</script>

<div class="modal-backdrop fade show"></div></body>
  <!-- Section: Design Block -->
    </body>

    </html>