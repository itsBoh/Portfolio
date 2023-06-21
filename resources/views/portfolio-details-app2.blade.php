<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Kelly Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("img/favicon.png") }}" rel="icon">
  <link href="{{ asset("img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset("img/portfolio/app_2_1.jpg") }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset("img/portfolio/app_2_2.jpg") }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset("img/portfolio/app_2_3.jpg") }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>NBA's Data Visualization</h3>
              <ul>
                <li><strong>Category</strong>: C# Application</li>
                <li><strong>Client</strong>: -</li>
                <li><strong>Project date</strong>: 2022</li>
                <li><strong>Project URL</strong>: <a href="https://github.com/StevenO29/Project-AD.git" target="_blank">github.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Project description</h2>
              <p>
                This program was created for the final project of an application development course. By creating a program that displays the details of an NBA basketball game, each team, and its players as well as users can change data in a connected database. This program uses windows forms as its basis with the C# programming language and is linked to an SQL database. in this project I learned a lot about managing and scheduling work because not only building a windows form but also needing to build a database to store all NBA data which of course is not small.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("vendor/waypoints/noframework.waypoints.js") }}"></script>
  <script src="{{ asset("vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("js/main.js") }}"></script>

</body>

</html>