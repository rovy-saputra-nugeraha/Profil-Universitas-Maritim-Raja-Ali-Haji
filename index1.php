<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Universitas Maritim Raja Ali Haji || UMRAH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css?=time();?" rel="stylesheet">
    <!-- Logo Univ Di Bar-Pencarian-->
    <link href="gambar/univ.png" rel="icon">

    <style>
    .google-map {
        width: 100%; /* Default width for mobile */
    }

    @media screen and (min-width: 768px) {
        /* Sesuaikan breakpoint (768px) berdasarkan kebutuhan pengguna */
        .google-map {
        width: 200%; /* Width for desktop */
        }
    }
    .fa-check {
      cursor: pointer;
    }
    </style>
    
</head>

<body>
    
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
            <img src="gambar/univ.png" alt="Logo" style="width: 30px; height: 30px; position: absolute;">
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index1.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h3 id="universityName" class="m-0 text-primary" style="color: blue;">
                    <img class="logo-left" src="gambar/univ.png" alt="Logo 1" height="60" width="60"/>
                    <span id="universityFullName">Universitas Maritim Raja Ali Haji</span>
                    <span id="universityAbbreviation" style="display: none;">UMRAH</span>
                </h3>
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index1.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fakultas</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="https://ft.umrah.ac.id/" class="dropdown-item">Fakultas Teknik dan Teknologi Kemaritiman</a>
                            <a href="https://fe.umrah.ac.id/" class="dropdown-item">Fakultas Ekonomi dan Bisnis</a>
                            <a href="https://fisip.umrah.ac.id/" class="dropdown-item">Fakultas Ilmu Sosial dan Ilmu Politik</a>
                            <a href="https://fikp.umrah.ac.id/" class="dropdown-item">Fakultas Ilmu Kelautan dan Perikanan</a>
                            <a href="https://umrah.ac.id/" class="dropdown-item">Fakultas Keguruan dan Ilmu Pendidikan</a>
                        </div>
                    </div>
                    <a href="#footer" class="nav-item nav-link">Informasi</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Berita</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="umrahtv.html" class="dropdown-item">UMRAH TV</a>
                            <a href="https://umrah.ac.id/archives/category/berita" class="dropdown-item">UMRAH INEWS</a>
                            <a href="kampusmerdeka.html" class="dropdown-item">Kampus Merdeka</a>
                            <a href="404.html" class="dropdown-item">404</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="utama.html" class="dropdown-item">Kabar UMRAH</a>
                            <a href="visi.html" class="dropdown-item">Visi Misi</a>
                            <a href="sejarah.html" class="dropdown-item">Sejarah</a>
                            <a href="pimpinan.html" class="dropdown-item">Pimpinan Kampus</a>
                            <a href="contact.php" class="dropdown-item">Costumer Service</a>
                        </div>
                    </div>
                </div>
                <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-block d-lg-block">Absensi</a>

            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="gambar/utama.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Universitas Maritim Raja Ali Haji</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Menjadi Pusat Kecemerlangan Pendidikan Tinggi, Riset, Mari-Sociopreneurship Dan
                                        Tamadun Maritim Di ASEAN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="gambar/utama2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Universitas Maritim Raja Ali Haji</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Menjadi Pusat Kecemerlangan Pendidikan Tinggi, Riset, Mari-Sociopreneurship Dan
                                        Tamadun Maritim Di ASEAN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="gambar/utama3.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Universitas Maritim Raja Ali Haji</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Menjadi Pusat Kecemerlangan Pendidikan Tinggi, Riset, Mari-Sociopreneurship Dan
                                        Tamadun Maritim Di ASEAN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <img class="img-fluid w-100" src="gambar/umrah.jpg" style="height: 300px;">
                    </div>
                </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Salam Sapa Sobat Maritim</h1>
                        <p class="mb-4" align="justify">Universitas Maritim Raja Ali Haji merupakan salah satu Universitas termuda di Negeri ini yang memiliki Nilai Strategis Bagi Wilayah dimana ia bertempat, Provinsi Kepulauan Riau. Tidak cuma bagi Kepulauan Riau sendiri namun juga bagi Indonesia di Wilayah Barat.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Terakreditasi Baik Sekali</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Lingkungan Univeristas yang Nyaman</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Kerjasama Dengan Mitra yang Berkualitas</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Dukungan Penuh Pemerintah</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="https://umrah.ac.id/akademik/akreditas-insitusi-dan-prodi">Telusuri</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

         <!-- About 2 -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Haii Sahabat Merdeka, Kampus Merdeka UMRAH</h1>
                        <p class="mb-4" align="justify">Kampus Merdeka merupakan wujud pembelajaran di perguruan tinggi yang otonom dan fleksibel sehingga tercipta kultur belajar yang inovatif, tidak mengekang, dan sesuai dengan kebutuhan mahasiswa.</p>

                        <p><i class="fa fa-check text-primary me-3" onclick="toggleCheckAndRedirect('https://kampusmerdeka.kemdikbud.go.id/program/mengajar')"></i>Kampus Mengajar</p>
                        <p><i class="fa fa-check text-primary me-3" onclick="toggleCheckAndRedirect('https://kampusmerdeka.kemdikbud.go.id/program/magang')"></i>Magang Bersertifikat</p>
                        <p><i class="fa fa-check text-primary me-3" onclick="toggleCheckAndRedirect('https://kampusmerdeka.kemdikbud.go.id/program/studi-independen')"></i>Studi Independen Bersertifikat</p>
                        <p><i class="fa fa-check text-primary me-3" onclick="toggleCheckAndRedirect('https://pmm.kampusmerdeka.kemdikbud.go.id/pages/info/program/pmm_4/')"></i>Pertukaran Mahasiswa Merdeka</p>

                        <a class="btn btn-primary py-3 px-5 mt-3" href="https://kampusmerdeka.kemdikbud.go.id/">Cek Kampus Merdeka</a>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <img class="img-fluid w-100" src="gambar/kampusmerdeka.jpg" style="height: 350px;">
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- About 2 End -->

        <!-- Category 2 -->
        <div class="container-xxl py-5">
                    <div class="container">
                        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Program Unggulan Kampus Merdeka</h1>
                        <div class="row g-4">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://kampusmerdeka.kemdikbud.go.id/program/mengajar">
                                <img src="gambar/kampusmengajar.png" alt="Image Description" class="img-fluid mb-4">
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://kampusmerdeka.kemdikbud.go.id/program/studi-independen"><br>
                                <img src="gambar/MSIB.png" alt="Image Description" class="img-fluid mb-4"><br>
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://pmm.kampusmerdeka.kemdikbud.go.id/pages/info/program/pmm_4/"><br>
                                <img src="gambar/pertukaran.png" alt="Image Description" class="img-fluid mb-4"><br>
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://kampusmerdeka.kemdikbud.go.id/program/iisma/syarat-ketentuan">
                                <img src="gambar/iisma.png" alt="Image Description" class="img-fluid mb-4">
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://wirausahamerdeka.kampusmerdeka.kemdikbud.go.id/info/">
                                <img src="gambar/Wirausaha.png" alt="Image Description" class="img-fluid mb-4">
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://praktisimengajar.id/">
                                <img src="gambar/praktisi.png" alt="Image Description" class="img-fluid mb-4">
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://grow.google/intl/id_id/bangkit/?tab=machine-learning"><br><br>
                                <img src="gambar/bankit2.png" alt="Image Description" class="img-fluid mb-4"><br><br>
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://www.esdm.go.id/id/page/gerilya"><br>
                                <img src="gambar/grilya.png" alt="Image Description" class="img-fluid mb-4">
                                <h5 align="center" class="mb-3 text-primary">Selengkapnya</h5>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Category 2 End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Badan Eksekutif Mahasiswa UMRAH</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"Seorang pemimpin adalah yang terbaik ketika orang-orang hampir tidak tahu dia ada, ketika pekerjaannya selesai, tujuannya terpenuhi, mereka akan berkata: kita melakukannya bersama." - Lao Tzu</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Farel Putra Albana</h5>
                                <small>Fakultas Teknik Informatika</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"Sebelum kamu menjadi seorang pemimpin, sukses adalah tentang menumbuhkan dirimu sendiri. Ketika kamu menjadi seorang pemimpin, kesuksesan adalah tentang menumbuhkan orang lain." - Jack Welch</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Hardi Prayuda</h5>
                                <small>Fakultas Ekonomi dan Bisnis</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"Kepemimpinan adalah kapasitas untuk menerjemahkan visi menjadi kenyataan." - Warren Bennis</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Mohd. Fiqri Raekhal</h5>
                                <small>Fakultas Ilmu Kelautan dan Perikanan</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"Tanggung jawab pertama seorang pemimpin adalah mendefinisikan realitas. Terakhir adalah mengucapkan terima kasih. Di antaranya, pemimpin adalah seorang hamba." - Max DePree</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Rovy Saputra Nugeraha</h5>
                                <small>Fakultas Ilmu Sosial dan Ilmu Politik</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>"Apa yang Anda lakukan memiliki dampak yang jauh lebih besar daripada apa yang Anda katakan." - Stephen Covey</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Alhuwayris Royhan</h5>
                                <small>Fakultas Keguruan dan Ilmu Pendidikan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End --> 

        <!-- Category Start -->
        <div id="footer" class="container-xxl py-5">
                <div class="container">
                    <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Informasi</h1>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://umrah.ac.id/archives/category/berita">
                                <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                                <h6 class="mb-3">Informasi</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <a class="cat-item rounded p-4" href="https://umrah.ac.id/akademik">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h6 class="mb-3">Akademik</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <a class="cat-item rounded p-4" href="https://umrah.ac.id/penelitian-2">
                                <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                                <h6 class="mb-3">Penelitian</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item rounded p-4" href="https://snpmb.bppp.kemdikbud.go.id/">
                                <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                                <h6 class="mb-3">Penerimaan</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="cat-item rounded p-4" href="https://ppid.umrah.ac.id/download/sk-rektor-949-un53-ak-2023-tentang-kalender-akademik-2023-2024/">
                                <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                                <h6 class="mb-3">Kalender Akademik</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="cat-item rounded p-4" href="contact.php">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h6 class="mb-3">Customer Service</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <img src="gambar/LogoB.png" alt="Logo" class="footer-logo"/><br><br><br>
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Raya Dompak - Tanjungpinang 29124, Provinsi Kepulauan Riau, PO. BOX 155</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62-771-4500089</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>email@umrah.ac.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://twitter.com/umrah_official"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/official.umrah.page/?locale=id_ID"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UCE5GhN4N6lmPYC8QjnsZxSw"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/umrah.official/?hl=id"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Komunitas Maritim</h5>
                        <p>Mari menjadi bagian Universitas Maritim Raja Ali Haji</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <a href="contact.php">
                            <button type="button" class="btn btn-primary">Gabung</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <div style="max-width: 1000px; margin: auto;"> <!-- Set max-width for desktop view -->
                        <!-- Class Iframe Cuy -->
                        <iframe
                            class="google-map mt-4"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d766!2d104.4731548!3d0.8704796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f694e946d7%3A0xfe529024b9f48504!2sUniversitas%20Maritim%20Raja%20Ali%20Haji%20%28UMRAH%29%20-%20Kampus%20Dompak!5e1!3m2!1sid!2sid!4v1657814406289"
                            height="350"
                            allowfullscreen=""
                            loading="lazy"
                            style="border: 0;"
                        >
                        </iframe>
                        <!-- Clouse Class Iframe Cuy -->
                    </div>
         
            </div><br>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; UMRAH 2023, All Right Reserved. 
							Designed By Rovy Saputra Nugeraha
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Atur Responsive Pengguna -->
    <script>
            function changeText() {
                var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

                var universityNameElement = document.getElementById("universityName");
                var universityFullNameElement = document.getElementById("universityFullName");
                var universityAbbreviationElement = document.getElementById("universityAbbreviation");

                if (screenWidth <= 767) {
                    universityFullNameElement.style.display = "none";
                    universityAbbreviationElement.style.display = "inline";
                } else {
                    universityFullNameElement.style.display = "inline";
                    universityAbbreviationElement.style.display = "none";
                }
            }

            // Panggil fungsi saat halaman dimuat dan saat layar diubah ukurannya
            window.onload = changeText;
            window.onresize = changeText;
     </script>
    <script>
        function toggleCheckAndRedirect(destination) {
            // Add logic to toggle the checkmark if needed
            // For now, let's assume you only want to redirect
        window.location.href = destination;
        }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>