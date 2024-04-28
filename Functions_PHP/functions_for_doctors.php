
<?php function doctorCards ($doctorImage, $doctonName, $doctorPosition) {
    return "
        <div class='item'>
            <div class='box'>
              <div class='img-box'>
                <img src='$doctorImage' alt='' />
              </div>
                <div class='detail-box'>
                    <h5>
                        $doctonName
                    </h5>
                    <h6>
                        $doctorPosition
                    </h6>
                
                    <div class='social_box'>
                    <a href='#'>
                        <i class='fa fa-facebook' aria-hidden='true'></i>
                    </a>
                    <a href='#'>
                        <i class='fa fa-twitter' aria-hidden='true'></i>
                    </a>
                    <a href='#'>
                        <i class='fa fa-linkedin' aria-hidden='true'></i>
                    </a>
                    <a href='#'>
                        <i class='fa fa-instagram' aria-hidden='true'></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        ";
}
?>








          <!-- Contacts of Doctor 1 -->
          <!-- <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team1.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Hennry
                </h5>
                <h6>
                  MBBS
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- end ofContacts of Doctor 1 -->


          
<?php 
// function TreatmentCards ($treatmentImage, $treatmentTitle, $treatmentContent, $treatmentReadMore="READ MORE") {
//     return "
//     <div class='col-md-6 col-lg-3'>
//         <div class='box'>
//             <div class='img-box'>
//                 <img src='$treatmentImage' alt=''>
//             </div>
//             <div class='detail-box'>
//                 <h4>
//                 $treatmentTitle
//                 </h4>
//                 <p>
//                 $treatmentContent
//                 </p>
//                 <a href='#'>
//                  $treatmentReadMore
//                 </a>
//             </div>
//         </div>
//     </div>
//     ";
// }
?>