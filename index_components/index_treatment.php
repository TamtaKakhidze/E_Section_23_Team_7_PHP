 <!-- treatment section -->
<?php include "./Functions_PHP/functions_for_treatment.php"; ?>
 <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">
        <?php 
        echo TreatmentCards("images/t1.png", "Nephrologist Care", "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything");
        echo TreatmentCards("images/t2.png", "Eye Care", "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything");
        echo TreatmentCards("images/t3.png", "Pediatrician Clinic", "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything");
        echo TreatmentCards("images/t4.png", "Parental Care", "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything");

        ?>
      </div>
    </div>
  </section>

  <!-- end treatment section -->
