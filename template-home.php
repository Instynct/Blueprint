<?php
/*
Template Name: Home
*/

// Load header.php
get_header(); ?>


<?php
// Load external Html templates
get_template_part('modules/slider-template');
get_template_part('modules/module-template'); ?>

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