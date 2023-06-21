<!DOCTYPE html>
<html lang="en">/assets/

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Alvin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("img/favicon.png") }}" rel="icon">
  <link href="{{ asset("img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("css/style.css") }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="{{ url("index") }}">Alvin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{ url("index") }}" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ url("index") }}">Home</a></li>
          <li><a class="active" href="{{ url("about") }}">About Me</a></li>
          <li><a href="{{ url("resume") }}">Resume</a></li>
          <li><a href="{{ url("portfolio") }}">Portfolio</a></li>
          <li><a href="{{ url("contact") }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://github.com/itsBoh" target="_blank" class="github"><i class="bi bi-github"></i></a>
        <a href="https://wa.link/jjqw5f" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.instagram.com/alvinlionel/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/alvin-lionel/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>As a computer information systems student, I am particularly interested in website development and data
            analysis. I have a strong background in programming languages such as HTML, CSS, JavaScript, and PHP. I
            enjoy exploring new technologies and am constantly looking to learn new skills in order to stay current with
            industry trends.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset("img/about.jpg") }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Alvin Lionel Wilbert</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> 32 May 2005</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong>+62 8592 8914 934</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> Surabaya, Indonesia</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> 21</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong>awilbert@student.ciputra.ac.id</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> Bachelor of Computer Information
                    Systems (expected graduation date: June 2025)</li>
                </ul>
              </div>
            </div>
            <p>
              My focus on website development and data analysis reflects my desire to create meaningful solutions that
              can make a difference in people's lives. With my technical expertise and passion for innovation, I am
              poised to make a significant impact in the field of computer science.
            </p>
          </div>
        </div>

      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("vendor/waypoints/noframework.waypoints.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("js/main.js") }}"></script>

</body>

</html>