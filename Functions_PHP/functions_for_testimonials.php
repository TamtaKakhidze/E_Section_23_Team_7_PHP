<?php function TestimonialItems ($patientName, $pationtDisease, $patientFeedback){
    return "
    <div class='box'>
        <div class='client_info'>
            <div class='client_name'>
                <h5>
                    $patientName
                </h5>
                <h6>
                    $pationtDisease
                </h6>
            </div>
            <i class='fa fa-quote-left' aria-hidden=true></i>
        </div>
        <p>
            $patientFeedback
        </p>
    </div>";
};
?>
