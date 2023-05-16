<?php
include "../admin/koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/Official_Final_Polished_White [Logo Only].png" type="image/x-icon">
    <title>Onlenkan</title>
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->


    <!-- about section -->

        <?php
        $hal = @$_GET['hal'];
        $beranda = "hal/beranda.php";
        $p = "hal/$hal.php";
        if (!empty($hal) && file_exists($p)) {
            include "$p";
        } else {
            include "$beranda";
        }
        ?>


    

    <!-- footer -->
    <footer class="w3l-footer">
        <div class="shape-footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite" values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                             M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
        <div class="w3l-footer-16 py-5">
            <div class="container">
                <div class="row footer-p">
                    <div class="col-lg-4 pe-lg-5">
                        <h3>Social Media</h3>
                        <p class="mt-3">Nantikan informasi terbaru dari onlenkan dengan cara follow social media onlenkan di bawah ini</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/onlenkan/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/company/onlenkancom/"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/onlenkan_/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="https://www.youtube.com/channel/UCAzhFjJUW_ikWeIfsdDKCFw"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li><a href="https://www.tiktok.com/@onlenkan_?lang=en"><i class="fab fa-tiktok"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Quick Link</h3>
                                <ul class="footer-gd-16">
                                    <li><a href=".?hal=profil">About Us</a></li>
                                    <li><a href=".?hal=berita">Berita</a></li>
                                    <li><a href=".?hal=agenda">Agenda</a></li>
                                    <li><a href=".?hal=galeri">Galerry</a></li>
                                    <li><a href=".?hal=contact">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-6 column">
                                <h3>Contact Info</h3>
                                <ul class="footer-contact-list">
                                    <li class="">Jl. Dr.Sutomo No.141, Mangunharjo, Kec.Mayangan, Kota Probolinggo, Jawa Timur 67211</li>
                                    <li class="mt-2 "><a href=""> +6287777000032</a></li>
                                    <li class="mt-2 "><a href=""> marketing@onlenkan.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-8 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Subscribe </h3>
                        <div class="end-column">
                            <form action="#" class="subscribe" method="post">
                                <input type="email" name="email" placeholder="Email Address" required="">
                                <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                            </form>
                            <p class="mt-4">Daftarkan email anda untuk mendapatkan konsultasi gratis senilai 500rb rupiah</p>
                        </div>
                    </div>
                </div>
                <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; 2021 Puppy Care. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- tesimonials carousel slider -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>