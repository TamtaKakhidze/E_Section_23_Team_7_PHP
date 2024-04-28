<?php 
include "index_components/head.php";
include "./Functions_PHP/functions_for_header.php";?>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">

          <div class="contact_nav">
          <?php 
          echo headerTopNavigation("fa fa-phone", "Call : +01 123455678990");
          echo headerTopNavigation("fa fa-envelope", "Email : demo@gmail.com");
          echo headerTopNavigation("fa fa-map-marker", "Location");
          ?>
          </div>
        </div>
      </div>

      <div class="header_bottom">
        <div class="container-fluid">

          <nav class="navbar navbar-expand-lg custom_nav-container ">

            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                <?php 
                echo headerBottompNavigation("index.php", "Home");
                echo headerBottompNavigation("about.php", "About");
                echo headerBottompNavigation("treatment.php", "Treatment");
                echo headerBottompNavigation("doctor.php", "Doctors");
                echo headerBottompNavigation("testimonial.php", "Testimonial");
                echo headerBottompNavigation("contact.php", "Contact Us");
                ?>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Sign Up
                  </span>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>

        </div>
      </div>
      
    </header>
  </div>