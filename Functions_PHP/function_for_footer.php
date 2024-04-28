<?php //function ColumnThreeLatestPosts($postColumnTitle, $postImage, $postTitle) {
    // return "
    //       <div class= col-md-6 col-lg-3>
    //         <div class=info_post>
    //           <h5>
    //             $postColumnTitle
    //           </h5>
    //           <div class=post_box>
    //             <div class=img-box>
    //               <img src=$postImage>
    //             </div>
    //             <p>
    //               $postTitle
    //             </p>
    //           </div>
    //         </div>
    //       </div>";
//}
?>


<?php function FooterPosts($postColumnTitle, $postImage1, $postTitle1, $postImage2, $postTitle2){
return "
    <div class=col-md-6 col-lg-3>
        <div class=info_post>
            <h5>
                $postColumnTitle
            </h5>
             <div class=post_box>
                    <div class=img-box>
                        <img src=$postImage1>
                    </div>
                 <p>
                    $postTitle1
                </p>
                </div>
                <div class=post_box>
                    <div class=img-box>
                         <img src=$postImage2>
                    </div>
                    <p>
                        $postTitle2
                    </p>
                </div>
            </div>
        </div>
    </div>";
};
?>

