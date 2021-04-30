<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cleaner</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
  <link href="asset-home/img/logo.svg" rel="icon">
  <link href="asset-home/img/logo.svg" rel="apple-touch-icon"> 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset-home/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset-home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset-home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset-home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset-home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset-home/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="asset-home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset-home/css/style.css" rel="stylesheet">
</head>

<body>

 
  @include('home-layout.navbar')

  @include('home-layout.hero-section')

  <main id="main">

    
    @include('home-layout.service')
    @include('home-layout.about')
    @include('home-layout.contact-form')
  
   
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Cleaner</h3>
              <p class="pb-3"><em>Cleaner welcome to you</em></p>
              <p>
                មហាវិថី សហពន្ធ័រុស្ស៊ី (១១០), រាជធានី​ភ្នំពេញ <br>
                royal university of phnom penh<br><br>
                <strong>Phone:</strong> 0966855502<br>
                <strong>Email:</strong> rossocheat1@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hour</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Day</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Done</a></li>
            </ul>
          </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Please Subscript</p>
            <form action="#" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> 

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cleaner</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="#">Team Soya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="asset-home/vendor/aos/aos.js"></script>
  <script src="asset-home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset-home/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset-home/vendor/php-email-form/validate.js"></script>
  <script src="asset-home/vendor/purecounter/purecounter.js"></script>
  <script src="asset-home/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="asset-home/js/main.js"></script>

</body>

</html>