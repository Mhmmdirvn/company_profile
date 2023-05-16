<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shorcut icon" href="" type="image/x-icon">
    <title>Onlenkan</title>
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">
</head>

<body>
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    <!-- <i class=""></i>Onlenkan<span>.com</span> -->
                    <img src="assets/images/Official_Final_Full_Blue.png" alt="" class="img-fluid" width="130px" height="100px" id="navbar-image">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href=".">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".?hal=profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=".?hal=berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".?hal=agenda">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".?hal=galeri">Galery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".?hal=contact">Contact Us</a>
                        </li>
                    </ul>
                    <form action="#error" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search" required>
                        <button class="btn btn-style" type="submit">Search</button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- hero slider Start -->
    <div class="banner-wrap">
        <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content">
                        <div class="w3l-breadcrumb py-lg-5">
                            <div class="container pt-4 pb-sm-4">
                                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Berita</h4>
                                <ul class="breadcrumbs-custom-path">
                                    <li><a href=".">Beranda</a></li>
                                    <li class="active"><i class="fas fa-angle-right mx-2"></i>berita</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
        </div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite" values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                                 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
    </div>
</body>
<script>
    const checkbox = document.getElementById('checkbox');
    const navbarImage = document.getElementById('navbar-image');

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('dark-mode');
            navbarImage.src = 'assets/images/Official_Final_Full white.png';
        } else {
            document.body.classList.remove('dark-mode');
            navbarImage.src = 'assets/images/Official_Final_Full_Blue.png'
        }
    });
</script>
</html>