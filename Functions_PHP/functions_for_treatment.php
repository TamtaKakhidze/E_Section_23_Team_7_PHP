
<?php function TreatmentCards ($treatmentImage, $treatmentTitle, $treatmentContent, $treatmentReadMore="READ MORE") {
    return "
    <div class='col-md-6 col-lg-3'>
        <div class='box'>
            <div class='img-box'>
                <img src='$treatmentImage' alt=''>
            </div>
            <div class='detail-box'>
                <h4>
                $treatmentTitle
                </h4>
                <p>
                $treatmentContent
                </p>
                <a href='#'>
                 $treatmentReadMore
                </a>
            </div>
        </div>
    </div>
    ";
}
?>
