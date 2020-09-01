<?php
/*
Template Name: Home
*/

// Load header.php
get_header(); ?>


<?php
// Load external Html templates
get_template_part('modules/slider-template');
get_template_part('modules/module-template');

$galleryArrowURL =  get_bloginfo('template_url') . '/assets/dist/svg/logo_header.svg';
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);
?>
<section class="svgloader">
    <div class="container">
        <h3>This is an svg</h3>
        <div class="svg-load"><?= file_get_contents($galleryArrowURL, false, stream_context_create($arrContextOptions)) ?></div>
    </div>
</section>
<section id="home-experience" data-color="red">
    <div class="container" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
        <h2><?php echo 'TEST SCROLLMAGIC' ?></h2>
    </div>
    <div id="home-experience-routes">
        <div class="container" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
            <div class="home-experience-slider">
                <li class="slide">scrollmagic 1</li>
                <li class="slide">scrollmagic 2</li>
                <li class="slide">scrollmagic 3</li>
                <li class="slide">scrollmagic 4</li>
                <li class="slide">scrollmagic 5</li>
                <li class="slide">scrollmagic 6</li>
                <li class="slide">scrollmagic 7</li>
                <li class="slide">scrollmagic 8</li>
                <li class="slide">scrollmagic 9</li>
                <li class="slide">scrollmagic 10</li>
            </div>
        </div>
    </div>
</section>


<?php
// Load footer.php
get_footer(); ?>