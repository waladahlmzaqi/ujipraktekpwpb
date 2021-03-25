<?php
require 'koneksi.php';
$id = $_GET['id'];
$wisata = query("SELECT * FROM wisata WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="template/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="template/css/style.css">
  <link rel="stylesheet" href="template/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline">
          <ul class="navbar-nav me-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <div class="dropdown dropend">
          <a style="text-decoration: none; font-size: 14px;" class=" fw-bold dropdown-toggle text-white" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, Walada Hulama.Z
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="margin-left: 10px;">
            <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-3"></i>Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-3"></i>Setting</a></li>
            <li><a class="dropdown-item" href="admin/logout.php"><i class="fas fa-sign-out-alt me-3"></i>Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla <sup>Copy</sup></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                </ul>
              </li>
              <li class="menu-header">Admin</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-server"></i><span>Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="admin/index.php">Data Wisata</a></li>
                </ul>
              </li>
        </aside>
      </div>










      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <!--  -->
          <div class="container-fluid">
            <!-- <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img  style="max-width:350px;">
                            <h6 class="mt-3">Deskripsi :</h6>
                            <div><?= $wisata['deskripsi'] ?></div>
                        </div>
                        <div class="col-md-7 ms-3">
                        <div class="card-body">
                          <div class="row g-3 align-items-center mb-3">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Nama Wisata</h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light">: <?= $wisata['nama'] ?></h6></label>
                            </div>
                          </div>
                          <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Alamat Wisata</h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light">: <?= $wisata['alamat'] ?></h6></label>
                            </div>
                          </div>
                          <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Email Wisata</h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light">: <?= $wisata['email'] ?></h6></label>
                            </div>
                          </div>
                          <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Jam Buka Wisata</h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light">: <?= $wisata['jam_buka'] ?></h6></label>
                            </div>
                          </div>
                            <a href="dashboard.php" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left me-2"></i>Kembali</a>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="">
                      <div class="card-body">
                        <img src="<?= $wisata['img'] ?>" class="card-img-top" style="max-width: min-content;">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="">
                      <div class="card-body">
                          <div class="row g-3 align-items-center mb-3">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Nama Wisata : </h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light"><?= $wisata['nama'] ?></h6></label>
                            </div>
                          </div>
                          <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Alamat Wisata : </h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light"><?= $wisata['alamat'] ?></h6></label>
                            </div>
                          </div>
                          <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Email Wisata : </h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light"><?= $wisata['email'] ?></h6></label>
                            </div>
                          </div>
                          <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                            <div class="col-4">
                              <label class="col-form-label"><h6>Jam Buka : </h6></label>
                            </div>
                            <div class="col-7">
                              <label class="col-form-label"><h6 class="fw-light"><?= $wisata['jam_buka'] ?></h6></label>
                            </div>
                          </div>
                            <a href="dashboard.php" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left me-2"></i>Kembali</a>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="">
                      <div class="card-body">
                        <h6 class="mt-3">Deskripsi :</h6>
                        <div><?= $wisata['deskripsi'] ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
        </section>
      </div>














      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://github.com/waladahlmzaqi">Walada Hulama.Z</a>
        </div>
        <!-- <div class="footer-right">
          
        </div> -->
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="template/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="template/js/scripts.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
