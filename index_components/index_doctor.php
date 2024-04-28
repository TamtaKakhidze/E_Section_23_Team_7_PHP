<?php 
include "index_components/head.php"; 
include "./Functions_PHP/functions_for_doctors.php"
?>
<!-- team section -->

<section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <!-- Contacts of Doctor 1 -->
          <?php echo doctorCards ("images/team1.jpg", "Dr. Watson", "MD") ?>
          <!-- end ofContacts of Doctor 1 -->

          <!-- Contacts of Doctor 2 -->
          <?php echo doctorCards ("images/team2.jpg", "Dr.House", "MD") ?>
          <!-- end of Contacts of Doctor 2 -->

          <!-- Contacts of Doctor 3 -->
          <?php echo doctorCards ("images/team3.jpg", "Dr. Doofenshmirtz", "MD") ?>
          <!-- end of Contacts of Doctor 3 -->

        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->