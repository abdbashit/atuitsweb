<?php 
include '../admin/auxiliaries.php';
include '../admin/database/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <link rel="shortcut icon" href="images/atuitslogo.png" type="image/x-icon" />
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATUITS RESPONSIVE WEBSITE</title>

    <!-- Iconscout CDN -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
    />

    <!-- Google Fonts (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- SWIPER JS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav>
      <div class="container nav__container">
        <a href="index.php">
          <img
            src="images/atuits_new_logo.PNG"
            class="logo"
            alt="atuits_logo"
          />
          <h4></h4></a
        >

        <ul class="nav__menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="project-topics.php">Project-Topics</a></li>
          <li><a href="contact.php">Contact</a></li>
          
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>
    <!-- END OF NAVBAR -->

  <!-- <header>
      <div class="container header__container">
        <div class="header__left">
          <h1>Technology for development</h1>
          <p>
            By honing your skills in areas like programming, cybersecurity, data
            analysis, and cloud computing, you can stay ahead of industry trends
            and unlock new opportunities. Whether you're seeking a promotion, a
            new job, or simply want to expand your knowledge base, investing in
            your ICT skills will pay off.
          </p>
          <a href="courses.php" class="btn btn-primary"> Get Started </a>
        </div> 

        <div class="header__right">
          <div class="header__right-image">
            <img src="./images/header.svg" alt="" />
          </div>
        </div>
      </div>
    </header>  -->
    
    <!-- END OF HEADER -->