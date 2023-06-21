<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Alvin</title>
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="{{ url("index") }}">Alvin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{ url("index") }}" class="logo"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ url("index") }}">Home</a></li>
          <li><a href="{{ url("about") }}">About Me</a></li>
          <li><a href="{{ url("resume") }}">Resume</a></li>
          <li><a class="active" href="{{ url("portfolio") }}">Portfolio</a></li>
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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>As a passionate developer and designer, I have worked on a diverse range of projects that showcase my skills in web development, data visualization, UI/UX design, and project management</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-design">Design</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/app_1_1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>The Crossy Road</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/app_1_1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Start Screen"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-app1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/app_2_1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>NBA's data visualization</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/app_2_1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Loading Screen"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-app2") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-design">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/des_1_1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>My Facility</h4>
                <p>UI/UX Design</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/des_1_1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mockup 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-des1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/web_1_1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Le Prospere's Landing Page</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/web_1_1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Page Design"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-web1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/web_2_1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Le Prospere's Inventory Management System</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/web_2_2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="LogIn Page"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-web2") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/app_1_2.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>The Crossy Road</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/app_1_2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Gameplay"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-app1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/app_2_2.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>NBA's data visualization</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/app_2_2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Match Screen"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-app2") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-design">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/des_1_2.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>My Facility</h4>
                <p>UI/UX Design</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/des_1_2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Design in Figma"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-des1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/web_1_2.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Le Prospere's Landing Page</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/web_1_2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mockup"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-web1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/web_2_2.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Le Prospere's Inventory Management System</h4>
                <p>Webite</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/web_2_2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Order Page"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-web2") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/app_1_3.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>The Crossy Road</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/app_1_3.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Game Over Screen"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-app1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/app_2_3.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>NBA's data visualization</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/app_2_3.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Player Data"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-app2") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-design">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/des_1_3.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>My Facility</h4>
                <p>UI/UX Design</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/des_1_3.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mockup"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-des1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/web_1_3.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Le Prospere's Landing Page</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/web_1_3.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mockup"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-web1") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("img/portfolio/web_2_3.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Le Prospere's Inventory Management System</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="{{ url("img/portfolio/web_2_3.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mockup"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details-web2") }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section><!-- End Portfolio Section -->

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
  <a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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