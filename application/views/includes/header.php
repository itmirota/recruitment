<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url().'assets/images/logo-mirota.png'?>">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />

    <link
    href="https://cdn.jsdelivr.net/gh/loadingio/transition.css@v2.0.0/dist/transition.css"
    rel="stylesheet"
    />
    <link
    href="https://cdn.jsdelivr.net/gh/loadingio/transition.css@v2.0.0/dist/transition.min.css"
    rel="stylesheet"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <link href="<?= base_url().'assets/dist/css/style.css'?>" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


	  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>


	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>



    
    <!-- Owl Stylesheets -->
    <!-- <link rel="stylesheet" href="<?php echo base_url().'assets/landingpage/owlcarousel/css/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/landingpage/owlcarousel/css/owl.theme.default.min.css'?>"> -->


    <style>
    #load{
      width: 100%;
      height: 100%;
      position: fixed;
      text-indent: 100%;
      background: rgba(255,255,255) url('./assets/dist/images/loader.gif') no-repeat center;
      z-index: 1;
      opacity: 0.8;
    }
  </style>

  <script>
    // Display a success toast, with a title
    function ajaxcsrf() {
      var csrfname = '<?= $this->security->get_csrf_token_name() ?>';
      var csrfhash = '<?= $this->security->get_csrf_hash() ?>';
      var csrf = {};
      csrf[csrfname] = csrfhash;
      $.ajaxSetup({
        "data": csrf
      });
    }
  </script>

  </head>
  <body style="margin:0;">
    <!-- <div id="load"></div> -->
   <!-- <div id="loader"></div> -->
    <div class="main">
      <?php 
      if($this->uri->segment(1) != 'login'){ ?> 
      <nav class="navBar z-3">
        <div class="container">
            <div class="logo ld ld-bounce-in" id="logo">
              <a href="<?php echo base_url()?>">
                <img class="img-logo" src="<?php echo base_url().'assets/dist/images/logo-mirota.png'?>" alt="" srcset="">
              </a>
                <!-- <a href="#">Your Logo</a> -->
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="<?= base_url()?>">Home</a></li>
                    <li><a href="<?= base_url('lowongan-kerja')?>">Lowongan</a></li>

                    <?php if(isset($roleId)){ ?> 
                    <li><a href="<?= base_url('pertanyaan-umum')?>">FAQ</a></li>
                    <li style="margin-right:30vh"><a href="<?= base_url('Biodata')?>">Biodata</a></li>
                    <?php } else {?>
                    <li><a  style="margin-right:40vh" href="<?= base_url('pertanyaan-umum')?>">FAQ</a></li>
                    <?php } ?> 
                    <?php
                    if(isset($roleId)){ ?> 
                    <li>
                    <a href="<?= base_url('halaman-pelamar')?>" class="link-akun"><i class="fa fa-solid fa-user"></i> Informasi Akun</a>
                    <a href="<?= base_url('logout')?>" class="link-logout"> Keluar</a>
                    </li>
                    <?php } else { ?> 
                    <li><button class="btn btn-sm btn-daftar" data-bs-toggle="modal" data-bs-target="#register">daftar</button>  <button class="btn btn-sm btn-login" data-bs-toggle="modal" data-bs-target="#login">login</button></li>
                    <?php } ?> 
                </ul>
            </div>

            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>         
      </nav>   
      <?php } ?>

      <!-- Modal Register -->
      <div class="modal modal-register fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="text-header text-blue fs-5" id="registerLabel">Masuk Ke akun anda</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('kandidat/save');?>" method="post">
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">nama</label>
                <input class="form-control form-control-lg" type="text" name="nama_kandidat" value="<?= set_value('nama_kandidat'); ?>" placeholder="Masukkan Nama disini" />
                <span style="color:red"><?= form_error('nama_kandidat'); ?></span>
              </div>
              <div class="mb-3">
                <label class="form-label">username</label>
                <input class="form-control form-control-lg" type="username" name="username" placeholder="Masukkan username disini" />
                <span style="color:red">
                <?= form_error('username'); ?>
                </span>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan Email disini" />
                <span style="color:red">
                <?= form_error('email'); ?>
                </span>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password disini" />
                <span style="color:red">
                <?= form_error('password'); ?>
                </span>
              </div>
              <div class="mb-3">
                <label class="form-label"> Konfirmasi Password</label>
                <input class="form-control form-control-lg" type="password" name="passconf" placeholder="" />
                <span style="color:red">
                <?= form_error('passconf'); ?>
                </span>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Login -->
      <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="text-header text-blue fs-5" id="loginLabel">Masuk ke akun anda</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('login/user'); ?>" method="post" >
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="username" class="form-control" name="username" id="username" aria-describedby="usernameHelp" placeholder="masukkan username disini">
                  <!-- <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password disini">
                  <div id="usernameHelp" class="form-text">lupa password? klik <a href="<?= base_url('login/lupa-password')?>"> reset</a> untuk merubah password</div>
                </div>

                <div class="d-flex justify-content-between">
                <div class="p-2">
                <div id="usernameHelp" class="form-text">Belum mempunyai akun? <a href="http://">daftar disini</a></div>
                </div>
                <div class="p-2">
                <button type="submit" class="btn btn-primary btn-biru">Submit</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 