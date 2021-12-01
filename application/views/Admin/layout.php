<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?php echo $title; ?></title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo site_url('template/admin/'); ?>vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo site_url('template/admin/'); ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo site_url('template/admin/'); ?>css/argon.css?v=1.2.0" type="text/css">
  <script src="<?php echo site_url('template/admin/'); ?>vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>js/pagination.js"></script>
   <!-- Optional JS -->
   <script src="<?php echo site_url('template/admin/'); ?>vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>vendor/chart.js/dist/Chart.extension.js"></script>

</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <strong>ADMIN</strong>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('admin') ?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/penyakit'); ?>">
                <i class="ni ni-box-2 text-orange"></i>
                <span class="nav-link-text">Data Penyakit</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/gejala'); ?>">
                <i class="ni ni-archive-2 text-primary"></i>
                <span class="nav-link-text">Data Gejala</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/rules'); ?>">
                <i class="ni ni-settings text-yellow"></i>
                <span class="nav-link-text">Basis Aturan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pembayaran'); ?>">
                <i class="ni ni-button-power text-purple"></i>
                <span class="nav-link-text">Log out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <?php
                $url = array();
                strpos($title,'-') ? $url = explode(' - ',$title) : $url[0] = $title;
              ?>
              <h6 class="h2 text-white d-inline-block mb-0"><? echo $url[0];?></h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><i class="fas fa-home"></i></a></li>
                  <?php 
                      echo isset($url[0]) ? "<li class='breadcrumb-item'><a href='".base_url().strtolower($url[0])."'>$url[0]</a></li>": '';
                      echo isset($url[1])  ? "<li class='breadcrumb-item active' aria-current='page'>$url[1]</li>" : '';
                   ?>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php echo $content; ?>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo site_url('template/admin/'); ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Docs JS -->
  <script src="<?php echo site_url('template/admin/'); ?>vendor/anchor-js/anchor.min.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>vendor/holderjs/holder.min.js"></script>
  <script src="<?php echo site_url('template/admin/'); ?>vendor/prismjs/prism.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo site_url('template/admin/'); ?>js/argon.js?v=1.2.0"></script>
  
</body>

</html>
