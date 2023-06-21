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
                  <img src="{{ asset("img/portfolio/web_1_1.jpg") }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset("img/portfolio/web_1_2.jpg") }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset("img/portfolio/web_1_3.jpg") }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Le Prospere's Landing Page</h3>
              <ul>
                <li><strong>Category</strong>: Website</li>
                <li><strong>Client</strong>: Le Prospere</li>
                <li><strong>Project date</strong>: 2022</li>
                <li><strong>Project URL</strong>: <a href="https://medium.com/@alvinlionel/system-analysis-design-project-febc25b8047">medium.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Project description</h2>
              <p>
                Le Prospere is a small and medium enterprise engaged in the field of beauty and health with organic bar soap products with various variants. Until before this project, Le Prospere did not have a special landing page to showcase their products. This landing page is made by going through several steps, namely interviews, making wireframes, designing using Figma then creating a website using HTML and CSS.
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