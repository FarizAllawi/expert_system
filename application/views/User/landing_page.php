<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Expert System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo site_url('template/user/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="<?php echo site_url('template/user/'); ?>vendor/owl.carousel2/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo site_url('template/user/'); ?>vendor/owl.carousel2/assets/owl.theme.default.css">
    <!-- Modal Video-->
    <link rel="stylesheet" href="<?php echo site_url('template/user/'); ?>vendor/modal-video/css/modal-video.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800&amp;display=swap">
    <!-- Device Mockup-->
    <link rel="stylesheet" href="<?php echo site_url('template/user/'); ?>css/device-mockups.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo site_url('template/user/'); ?>css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo site_url('template/user/'); ?>css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo site_url('template/user/'); ?>img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="<?php echo base_url(); ?>">
                Expert System
            </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link link-scroll active" href="#hero">Home <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a class="nav-link link-scroll" href="#proses">Proses</a></li>
              <li class="nav-item"><a class="nav-link link-scroll" href="#contatcs">Contacts</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section class="hero bg-top" id="hero" style="background: url(<?php echo site_url('template/user/'); ?>img/banner-4.png) no-repeat; background-size: 100% 80%">
      <div class="container">
        <div class="row py-5">
          <div class="col-lg-5 py-5">
            <h1 class="font-weight-bold">Expert System</h1>
            <p class="my-4 text-muted">Sistem Pakar (dalam bahasa inggris Expert system) adalah sistem informasi yang berisi dengan pengetahuan dari pakar sehingga dapat digunakan untuk konsultasi. pengetahuan dari pakar di dalam sustem ini digunakan sebagai dasar oleh Sistem Pakar untuk menjawab pertanyaan(konsultasi).</p>
            <ul class="list-inline mb-0">
              <li class="list-inline-item mb-2 mb-lg-0"><a class="btn btn-primary btn-lg px-4" href="<?php echo site_url('konsultasi'); ?>"> <i class="fas fa-stethoscope mr-3"></i>Konsultasi Sekarang</a></li>
            </ul>
          </div>
          <div class="col-lg-6 ml-auto">
            <img class="img-fluid" src="<?php echo site_url('template/user/'); ?>img/doctor.png"  width="600" height="600" alt="">
            <div class="device-wrapper mx-auto">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-center py-0" id="proses" style="background: url(img/service-bg.svg) no-repeat; background-size: cover">
      <section class="about py-0">
        <div class="container">
          <p class="h6 text-uppercase text-primary">PROCESS</p>
          <h2 class="mb-5">3 Step untuk mengetahui penyakit kamu</h2>
          <div class="row pb-5">
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <!-- Services Item-->
              <div class="card border-0 shadow rounded-lg py-4 text-left">
                  <div class="card-body p-5">
                  <svg class="svg-icon svg-icon-light" style="width:60px;height:60px;color:#ff904e">
                      <use xlink:href="#document-saved-1"> </use>
                  </svg>
                  <h3 class="font-weight-normal h4 my-4">Isi data diri</h3>
                  <p class="text-small mb-0">Proses ini diperlukan agar kami mengetahui data diri kamu</p>
                  </div>
              </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <!-- Services Item-->
              <div class="card border-0 shadow rounded-lg py-4 text-left">
                  <div class="card-body p-5">
                  <svg class="svg-icon svg-icon-light" style="width:60px;height:60px;color:#39f8d2">
                      <use xlink:href="#map-marker-1"> </use>
                  </svg>
                  <h3 class="font-weight-normal h4 my-4">Gejala yang Dialami </h3>
                  <p class="text-small mb-0 ">Memilih lebih dari 2 gejala yang dialami agar hasil lebih akurat</p>
                  </div>
              </div>
              </div>
              <div class="col-lg-4 col-md-6">
              <!-- Services Item-->
              <div class="card border-0 shadow rounded-lg py-4 text-left">
                  <div class="card-body p-5">
                  <svg class="svg-icon svg-icon-light" style="width:60px;height:60px;color:#8190ff">
                      <use xlink:href="#arrow-target-1"> </use>
                  </svg>
                  <h3 class="font-weight-normal h4 my-4">Hasil diagnosa</h3>
                  <p class="text-small mb-0">Hasil diagnosa dari gejala-gejala yang kamu alami</p>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </section>
      <section class="with-pattern-1" id="services">
        <div class="container">
          <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0"><img class="img-fluid w-100 px-lg-5" src="img/objects.svg" alt=""></div>
            <div class="col-lg-6">
              <h2>The Best Business Solutions Guide for You</h2>
              <p class="text-muted">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation.</p>
              <button class="btn btn-primary js-modal-btn" data-video-id="B6uuIHpFkuo"><i class="fas fa-play-circle mr-2"></i>Play video</button>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h2>Make your own success as simple you clap</h2>
              <p class="text-muted">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation.</p>
              <ul class="list-check">
                <li class="text-muted mb-2">Various Analysis Options</li>
                <li class="text-muted mb-2">Page Load Details (time, size, number of requests)</li>
                <li class="text-muted mb-2">Waterfall, Video and Report History</li>
              </ul>
              <button class="btn btn-primary js-modal-btn" data-video-id="B6uuIHpFkuo"><i class="fas fa-play-circle mr-2"></i>Play video</button>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                  <!-- Services Item-->
                  <div class="card border-0 shadow rounded-lg text-left px-2">
                    <div class="card-body px py-5">
                      <svg class="svg-icon" style="width:40px;height:40px;color:#ff904e">
                        <use xlink:href="#document-saved-1"> </use>
                      </svg>
                      <h3 class="h5 font-weight-normal h4 my-3">Online Marketing</h3>
                      <p class="text-small mb-0 text-muted">Lorem ipsum dolor amet consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <!-- Services Item-->
                  <div class="card border-0 shadow rounded-lg text-left px-2">
                    <div class="card-body px py-5">
                      <svg class="svg-icon" style="width:40px;height:40px;color:#39f8d2">
                        <use xlink:href="#map-marker-1"> </use>
                      </svg>
                      <h3 class="h5 font-weight-normal h4 my-3">Track your move </h3>
                      <p class="text-small mb-0 text-muted">Lorem ipsum dolor amet consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 mb-4">
                  <!-- Services Item-->
                  <div class="card border-0 shadow rounded-lg text-left px-2">
                    <div class="card-body px py-5">
                      <svg class="svg-icon" style="width:40px;height:40px;color:#8190ff">
                        <use xlink:href="#arrow-target-1"> </use>
                      </svg>
                      <h3 class="h5 font-weight-normal h4 my-3">Market analysis</h3>
                      <p class="text-small mb-0 text-muted">Lorem ipsum dolor amet consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <!-- Services Item-->
                  <div class="card border-0 shadow rounded-lg text-left px-2">
                    <div class="card-body px py-5">
                      <svg class="svg-icon" style="width:40px;height:40px;color:#ff634b">
                        <use xlink:href="#sorting-1"> </use>
                      </svg>
                      <h3 class="h5 font-weight-normal h4 my-3">Full Settings</h3>
                      <p class="text-small mb-0 text-muted">Lorem ipsum dolor amet consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <section class="p-0" id="contacts" style="background: url(img/testimonials-bg.png) no-repeat; background-size: 40% 100%; background-position: left center">
      <div class="container text-center">
        <p class="h6 text-uppercase text-primary">Testimonials</p>
        <h2 class="mb-5">What Our Clients Says?</h2>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="owl-carousel owl-theme testimonials-slider">
              <div class="mx-3 mx-lg-5 my-5 pt-3">
                <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                  <div class="card-body index-forward pt-5 rounded-lg">
                    <div class="testimonial-img"><img class="rounded-circle" src="img/avatar-1.jpg" alt=""/></div>
                    <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <h5 class="font-weight-bold mb-0">Sarah Hudson</h5>
                    <p class="text-primary mb-0 text-small">Tech Developer</p>
                  </div>
                </div>
              </div>
              <div class="mx-3 mx-lg-5 my-5 pt-3">
                <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                  <div class="card-body index-forward pt-5 rounded-lg">
                    <div class="testimonial-img"><img class="rounded-circle" src="img/avatar-2.png" alt=""/></div>
                    <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <h5 class="font-weight-bold mb-0">Frank Smith</h5>
                    <p class="text-primary mb-0 text-small">Tech Developer</p>
                  </div>
                </div>
              </div>
              <div class="mx-3 mx-lg-5 my-5 pt-3">
                <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                  <div class="card-body index-forward pt-5 rounded-lg">
                    <div class="testimonial-img"><img class="rounded-circle" src="img/avatar-1.jpg" alt=""/></div>
                    <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <h5 class="font-weight-bold mb-0">Sarah Hudson</h5>
                    <p class="text-primary mb-0 text-small">Tech Developer</p>
                  </div>
                </div>
              </div>
              <div class="mx-3 mx-lg-5 my-5 pt-3">
                <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                  <div class="card-body index-forward pt-5 rounded-lg">
                    <div class="testimonial-img"><img class="rounded-circle" src="img/avatar-2.png" alt=""/></div>
                    <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <h5 class="font-weight-bold mb-0">Frank Smith</h5>
                    <p class="text-primary mb-0 text-small">Tech Developer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><a class="scropll-top-btn" id="scrollTop" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
    <footer class="with-pattern-1 position-relative">
      <div class="container section-padding-y">
        <div class="row">
          <div class="col-lg-3 mb-4 mb-lg-0"><img class="mb-4" src="img/logo.svg" alt="" width="110">
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
          <div class="col-lg-2 mb-4 mb-lg-0">
            <h2 class="h5 mb-4">Quick Links</h2>
            <div class="d-flex">
              <ul class="list-unstyled d-inline-block mr-4 mb-0">
                <li class="mb-2"><a class="footer-link" href="#">History </a></li>
                <li class="mb-2"><a class="footer-link" href="#">About us</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Contact us</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 mb-4 mb-lg-0">
            <h2 class="h5 mb-4">Services</h2>
            <div class="d-flex">
              <ul class="list-unstyled mr-4 mb-0">
                <li class="mb-2"><a class="footer-link" href="#">History </a></li>
                <li class="mb-2"><a class="footer-link" href="#">About us</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Contact us</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5">
            <h2 class="h5 mb-4">Contact Info</h2>
            <ul class="list-unstyled mr-4 mb-3">
              <li class="mb-2 text-muted">728  Ocello Street, San Diego, California. </li>
              <li class="mb-2"><a class="footer-link" href="tel:619-851-4132">619-851-4132</a></li>
              <li class="mb-2"><a class="footer-link" href="mailto:Nova@example.com">Nova@example.com</a></li>
            </ul>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">       
        <div class="container text-center py-4">
          <p class="mb-0 text-muted text-sm">&copy; 2019, Your company. Template by <a href="https://bootstraptemple.com" class="text-reset">Bootstrap Temple</a>.</p>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="<?php echo site_url('template/user/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url('template/user/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo site_url('template/user/'); ?>vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="<?php echo site_url('template/user/'); ?>vendor/modal-video/js/modal-video.js"></script>
    <script src="<?php echo site_url('template/user/'); ?>js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>