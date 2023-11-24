<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rovysaputra10@gmail.com'; // Your Gmail email address
        $mail->Password = 'mdxmupvhzrspcqzm'; // Your Gmail App Password
        $mail->Port = 587; // Use 587 for TLS or 465 for SSL
        $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl'
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress('rovysaputra10@gmail.com');
        $mail->Subject = "$email ($subject)";
        $mail->Body = $message;
        $mail->send();
        header("Location: contact.php?email_sent=1");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact || UMRAH</title>
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

    <link href="gambar/univ.png" rel="icon">

    <style>
        .google-map-container {
        position: relative;
        overflow: hidden;
        padding-bottom: 87%; /* 16:10 aspect ratio for desktop */
        height: 0;
    }

    .google-map {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    @media (max-width: 767px) {
        /* Adjust styles for screens less than 768px wide (mobile) */
        .google-map-container {
            padding-bottom: 100%; /* You can adjust this value for a different aspect ratio on mobile */
        }
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
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Contact</h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <span>Jalan Raya Dompak - Tanjungpinang 29124, Provinsi Kepulauan Riau, PO. BOX 155</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                    <span>email@umrah.ac.id</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text-primary"></i>
                                    </div>
                                    <span>+62-771-4500089</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="google-map-container">
        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d766!2d104.4731548!3d0.8704796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f694e946d7%3A0xfe529024b9f48504!2sUniversitas%20Maritim%20Raja%20Ali%20Haji%20%28UMRAH%29%20-%20Kampus%20Dompak!5e1!3m2!1sid!2sid!4v1657814406289"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">Selamat Datang ada yang bisa kami bantu? mari komunikasikan apa yang anda ingin tahu tentang Universitas Maritim Raja Ali Haji. Ayo kirim email kamu sekarang.
                                  </a></p>
                        <form class="display-grid row-gap-1-rem" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" placeholder="Name" autocomplete="off" required />
                                        <label for="name">Masukkan Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control" placeholder="Email" autocomplete="off" required />
                                        <label for="email">Masukkan Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="subject" type="text" class="form-control" placeholder="Subject" autocomplete="off" required />
                                        <label for="subject">Subjek</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="ddd" style="height: 150px" required></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="send">
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

          <!-- Footer Start -->
          <div id="footer" class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
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