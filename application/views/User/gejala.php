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
              <li class="nav-item"><a class="nav-link link-scroll" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link link-scroll" href="#services">Services</a></li>
              <li class="nav-item"><a class="nav-link link-scroll" href="#testimonials">Testimonials</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section class="hero bg-top" id="hero">
      <div class="container">
        <div class="row py-5">
            <div class="col-lg-12">
                <h1 class="font-weight-bold text-center">Gejala yang dialami</h1>
                <span class="text-danger"><?php echo form_error('gejala'); ?></span>
            </div>
            <form method="post" class="row" id="gejala-form">
              <input type="hidden" name="gejala" id="gejala" />
              <input type="hidden" name="gejalaText"  id="gejalaText"/>
              <div class="col-lg-12">
                <div class="my-2">
                <?php
                  foreach($data_gejala as $gejala)
                  {
                    echo "<input type='checkbox' value='$gejala->kd_gejala' name='gejala$gejala->kd_gejala' id='gejala$gejala->kd_gejala'> $gejala->nm_gejala</br>"; 
                  }              
                ?>
                </div>
              </div>
              <div class="col-lg-12">
                  <div class="my-4">
                      <div class="row">
                          <div class="col-md-3">
                              <h4>Gejala yang dipilih :</h4>
                          </div>
                          <div class="col-md-9">
                              <textarea class="form-control" rows="3" id="mytextbox" disabled></textarea>
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-md px-4 float-right"><i class="fas fa-arrow-right mr-3"></i>Selanjutnya</button>
              </div>
            </form>
            <div class="col-lg-12">
                <h2 class="mb-3 mt-3">Progress kamu saat ini</h2>
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
                    <div class="card border-0 bg-primary shadow rounded-lg py-4 text-left">
                        <div class="card-body p-5">
                        <svg class="svg-icon svg-icon-light" style="width:60px;height:60px;color:#ffffff">
                            <use xlink:href="#map-marker-1"> </use>
                        </svg>
                        <h3 class="font-weight-normal h4 my-4 text-white">Gejala yang Dialami </h3>
                        <p class="text-small mb-0 text-white">Memilih lebih dari 2 gejala yang dialami agar hasil lebih akurat</p>
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
        </div>
      </div>
    </section>
    <a class="scropll-top-btn" id="scrollTop" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
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
      let checkedGejala = [];
      let gejala = {
        <?php foreach($data_gejala as $gejala) {
          echo "gejala$gejala->kd_gejala : '$gejala->nm_gejala',";
        }?>
      }
      let hiddenGejala = document.getElementById("gejala");
      let gejalaText = document.getElementById("gejalaText");
      let mytextbox = document.getElementById("mytextbox")
      let inputs = document.getElementsByTagName("input");
      for(var i = 0; i < inputs.length; i++) {
          if(inputs[i].type === "checkbox" && inputs[i].name.indexOf('gejala') > -1) {
              inputs[i].onchange = function(){
                  if(this.checked){
                      mytextbox.value = mytextbox.value  + gejala[this.name]+', ';
                      hiddenGejala.value  = hiddenGejala.value + this.name.split("gejala")[1]+','; 
                      gejalaText.value = gejalaText.value + gejala[this.name]+', ';
                  }else{
                      mytextbox.value = mytextbox.value.replace(gejala[this.name]+', ', ""); 
                      gejalaText.value = gejalaText.value.replace(gejala[this.name]+', ', ""); 
                      hiddenGejala.value  = hiddenGejala.value.replace(this.name.split("gejala")[1]+',', "");
                      console.log(hiddenGejala.value);
                  }
              }
          }  
      }


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