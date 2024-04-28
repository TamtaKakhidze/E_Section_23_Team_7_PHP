<?php 
include "index_components/head.php"; 
include "./Functions_PHP/functions_for_testimonials.php"
?>

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>Testimonial</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

          <!-- Carousel Item 1 -->
          <div class="carousel-item active">
              <?php echo TestimonialItems ("Billie Milligan", "Multiple personality disorder", "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.")?>
          </div>
          <!-- end of Carousel Item 1 -->

          <!-- Carousel Item 2 -->
          <div class="carousel-item">
              <?php echo TestimonialItems ("Tyler Durden", "Soap Poisoning", "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.")?>
          </div>
          <!-- end of Carousel Item 2 -->

          <!-- Carousel Item 3 -->
          <div class="carousel-item">
            <?php echo TestimonialItems ("Jubal Harshaw", "Hallucinating aliens", "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.")?>
          </div>
        <!-- end of Carousel Item 3 -->

        <!-- Carousel -->
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- end of Carousel -->

      </div>
    </div>
  </section>
  <!-- end client section -->