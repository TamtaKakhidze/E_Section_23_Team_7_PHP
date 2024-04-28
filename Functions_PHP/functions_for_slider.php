<?php include "./index_components/head.php";?>

<?php
$sliders = [
    [
        'headingWhite' =>  ['Mico', 'Mico', 'Mico'],
        'headingColorful'  =>  ['Hospital', 'Hospital', 'Hospital'],
        'content'  =>  ['Our medical professionals strive to provide exceptional care, utilizing advanced technology and compassionate expertise for improved patient outcomes', 'Innovative medical research drives breakthroughs, shaping the future of healthcare and fostering wellness within communities through collaborative efforts.', 'Dedicated staff members ensure quality service delivery, prioritizing patient comfort, safety, and holistic well-being throughout their healthcare journey.'],
        'buttonText'  =>  ['Contact Us', 'Contact Us', 'Contact Us',],
        'rightImage'   =>  ['images/slider-img.jpg', 'images/slider-img.jpg', 'images/slider-img.jpg'],
    ],
];

function playSliders($sliders)
{
    for ($i = 0; $i <count($sliders[0]['headingWhite']); $i++) {
        $slider = $sliders[0];
        if ($i == 0) {
            $sliderClass = 'carousel-item active';
        } else {
            $sliderClass = 'carousel-item';
        }
        echo '
             <div class="'. $sliderClass .'">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <div class="play_btn">
                                    <button>
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </button>
                                </div>
                                
                                <h1>'. $slider['headingWhite'][$i] .'<br><span>'. $slider['headingColorful'][$i] .'</span></h1>
                                <p>'. $slider['content'][$i] .'</p>
                                <a href="./contact.php">' . $slider['buttonText'][$i] . '</a>
                            </div>

                        </div>

                        <div class="col-md-6">
                             <div class="img-box">
                                <img class="new_img" src="'. $slider['rightImage'][$i] .'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }

    return $sliders;
}
?>