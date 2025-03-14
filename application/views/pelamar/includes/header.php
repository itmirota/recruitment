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

    <link href="<?= base_url().'assets/dist/css/user.css'?>" rel="stylesheet">

    <link href="<?= base_url().'assets/dist/css/style.css'?>" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  </head>
  <body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>

  <div id="main">
    <div class="menu d-flex justify-content-center" onclick="openNav()">
      <span style="font-size:30px;color:white;">&#9776;</span>
    </div>
  <!-- <div id="load"></div> -->