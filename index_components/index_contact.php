<?php include "index_components/head.php"; ?>
  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>

      <div class="row">
        <div class="col-md-7">
        <!-- Form -->
          <div class="form_container">
            <!-- Inputs -->
            <form action="./Functions_PHP/form_Contact_US_submitted.php" method="POST">
              <div>
                <input type="text" placeholder="Full Name" name="fullName"/>
              </div>
              <div>
                <input type="email" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="phoneNumber"/>
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message" />
              </div>
              <!-- end of inputs -->

              <!-- button -->
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
              <!-- end of button -->
              
            </form>

          </div>
        <!-- end of Form -->
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->