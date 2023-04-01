<?php
include_once './db/auth.php' ; 
echo '
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
   
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      // Shared ID
      gtag("config", "UA-118965717-3");
      // Bootstrap ID
      gtag("config", "UA-118965717-5");
    </script>
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
      <img src="logo.png" class="" >
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard </a></li>
       
        <li class="nav-item"><a class="nav-link" href="buildings.php">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-building"></use>
            </svg> Buildings</a></li>
            <li class="nav-item"><a class="nav-link" href="apartments.php">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-house"></use>
              </svg> Apartments </a></li>
              <li class="nav-item"><a class="nav-link" href="apartments.php">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-industry"></use>
                </svg> Offices </a></li>
                <li class="nav-item"><a class="nav-link" href="garages.php">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-garage"></use>
                </svg> Garage </a></li>
          
        <li class="nav-divider"></li>
        <li class="nav-item"><a class="nav-link" href="logout.php" target="_top">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
          </svg> Logout </a></li> 
         
      </ul>
       
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector("#sidebar")).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/apartments.php">Apartments</a></li>
            <li class="nav-item"><a class="nav-link" href="/buildings.php">Buildings</a></li>
            <li class="nav-item"><a class="nav-link" href="/offices.php">Offices</a></li>
            <li class="nav-item"><a class="nav-link" href="/garages.php">Garages</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="logout.php">
                
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        
 
      </header>
     
    
     ' 
        ;
        ?>