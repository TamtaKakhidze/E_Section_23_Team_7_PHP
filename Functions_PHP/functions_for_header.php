<?php function headerTopNavigation($topFontAwesomIcon, $topText){
return "
    <a href='#'>
    <i class='$topFontAwesomIcon' aria-hidden='true'></i>
    <span class='change-color'>
        $topText
    </span>
    </a>";
};
?>

<?php function headerBottompNavigation($bottomHref, $hrefText){
return "
    <li class='nav-item'>
        <a class='nav-link' href='$bottomHref'> $hrefText</a>
    </li>";
};

?>


