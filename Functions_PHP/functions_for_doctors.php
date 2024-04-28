
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
