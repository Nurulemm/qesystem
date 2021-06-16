<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Quarantine Exemption System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/kkm1.png" rel="icon">
  <link href="img/kkm1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Header -->
  <header id="header" class="fixed-top">
    <div class="container">


      <div class="logo float-left">
         <?php
      echo "Date for today : ";
      // set the default timezone to use
      date_default_timezone_set('Asia/Kuala_Lumpur');
      echo date("d-M-Y");
        ?> <br>
        <a href="https://twitter.com/KKMPutrajaya" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/kementeriankesihatanmalaysia" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/kementeriankesihatanmalaysia/" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="Homepage-QES.php">Home</a></li>
          <li><a href="application.php">Application</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li class="drop-down"><a href="">Sitemap</a>
            <ul>
             <li><a href="appform.php">New Application</a></li>
              <li><a href="check.php">Check Application Status</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="#">Sitemap 4</a></li>
            </ul>
          </li>
          <li><a href="application.php">Log In</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">


      <div class="intro-img">
        <img src="img/logokkm1.png" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>HOME <br>SURVEILLANCE  <br> ORDER <br>SYSTEM</h2>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

<br>

   <!--==========================
      Application Section
    ============================-->


   <section id="services" class="section-bg">
      <d iv class="container">

        <header class="section-header">
          <h3>APPLICATION FOR HOME SURVEILLANCE ORDER</h3>
        </header>
        <br><br>
        <div class="wow bounceInUp" align='center' data-wow-duration="1.4s">
 
            <div class="box" style="width:400px">
              <form action="/action_page.php"  >
    <a href="appform.php" class="btn btn-primary">New Application</a><br><br>
    <a href="check.php" class="btn btn-primary">Check Application Status</a>
            </div>
          </div>
        </form>
      </div>

        <div align='center' >
       
  </div>
  </div>
  </div>

      </div>
    </section><!-- #application -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">

        <div class="row row-eq-height justify-content-center">

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Visitors</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p> Reviewed Applications</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Total of Applicant(s)</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Approved Applications</p>
          </div>
  
        </div>

      </div>
    </section>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15938.123247401629!2d101.69610202675764!3d2.9500853656219497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d2.9452363999999998!2d101.6957156!4m5!1s0x31cdb625448e0bb1%3A0xee2956c5b3275929!2skkm!3m2!1d2.9425836!2d101.7072263!5e0!3m2!1sen!2smy!4v1623381022951!5m2!1sen!2smy" frameborder="5" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-5 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            Kompleks E, Blok E7, <br>
            Pusat Pentadbiran Kerajaan Persekutuan, <br>
            62590, 62000 Putrajaya, Wilayah Persekutuan Putrajaya<br>
              <strong>Phone:</strong> 03-8000 8000<br>
              <strong>Email:</strong> hso@kkm.gov.my<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/KKMPutrajaya" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/kementeriankesihatanmalaysia" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/kementeriankesihatanmalaysia/" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Kementerian Kesihatan Malaysia</strong>. All Rights Reserved
      </div>

      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
