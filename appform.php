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
              <li><a href="#">Sitemap 1</a></li>
              <li><a href="#">Sitemap 2</a></li>
              <li><a href="#">Sitemap 3</a></li>
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
        <h2>QUARANTINE <br> EXEMPTION <br> SYSTEM</h2>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">



   <!--==========================
      Application Section
    ============================-->


   <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
        <h3>NEW APPLICATION FORM</h3>
        <p>* Required field</p>
        </header>

  
        <div class="form-group" action="/action_page.php">
        <div class="row">
        <div class="col">
        <label for="fname">* Full Name :</label>
        <input type="text" class="form-control" id="fname"  name="fname" required> <br>

        <label for="fname">* Individual Entering Malaysia :</label>
        <textarea class="form-control" rows="5" id="pusname" required></textarea> <br>

        <label for="fname">Nationality :</label>
        <input type="text" class="form-control" id="nationality" name="nationality"> <br>

        <label for="fname">Type of Transportation :</label><br>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
        <label class="custom-control-label" for="customRadio">Land</label>
       </div>
       <div class="custom-control custom-radio custom-control-inline">
       <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
       <label class="custom-control-label" for="customRadio2">Sea</label>
       </div>
       <div class="custom-control custom-radio custom-control-inline">
       <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
       <label class="custom-control-label" for="customRadio2">Air</label>
       </div><br><br>

        <label for="port">Port of Entry :</label>
        <input type="text" class="form-control" id="port" name="port"> <br>

        <label for="address">Full Address in Malaysia :</label>
        <textarea class="form-control" rows="5" id="address"></textarea> <br>

        <label for="reason">Reason for Application :</label>
        <select class="form-control" id="reason">
    <option>Periodic Commuting Arrangement/Reciprocal Green Lane</option>
    <option>Death/Emergency</option>
    <option>Diplomat</option>
    <option>Business Traveller</option>
    <option>Others</option>
    </select> <br>

       <label for="file">Upload Supporting Documents :</label>
       <input type="file" class="form-control-file border">

        </div>

        <div class="col">
        <label for="IC">* Identification Card/Passport No. :</label>
       <input type="password" class="form-control" name="ic" required> <br>

       <label for="IC">* Email Address :</label>
       <input type="email" class="form-control" name="email" required> <br>

       <label for="fname">Country of Departure :</label>
        <input type="text" class="form-control" id="country" name="country"> <br>

        <label for="phone">* Telephone No. :</label>
       <input type="phone" class="form-control" name="phone" required> <br>

        <label for="fname">Vaccination Status :</label><br>
        <div class="form-check">
       <label class="form-check-label">
       <input type="radio" class="form-check-input" name="optradio">Pfizer BioNTech/Comirnaty</label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Moderna </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Sinovac/Coronavac</label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Astra Zeneca/Vaxzeria/Covishield</label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Sinopharm</label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio"> CanSino</label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Gamaleya/Sputnik V</label>
      </div>
       <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Johnson & Johnson/Janssen</label>
      </div>
       <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Novavax</label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Bharat Biotech/Covaxin</label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">None</label>
      </div><br><br>


       </div>
       </div>
        </div>
       
      <button type="button" class="btn btn-primary">Submit Application</button>

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