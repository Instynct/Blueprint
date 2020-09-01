<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */
?>
<!-- Getting the header -->
<?php get_header(); ?>

<?php
$page_404 = get_field('page_404', 'options');
$sub_title = $page_404['sub_title'];
$title = $page_404['title'];
$button = $page_404['button'];
$svgURL =  get_bloginfo('template_url') . '/dist/svg/arrow2.svg';

?>
<!-- Start Internet Explorer Page -->
<section class="error">
    <div class="container">
        <div class="content">
            <p class="subtitle">
                <?php echo $sub_title ?>
            </p>
            <h2 class="title">
                <?php echo $title ?>
            </h2>
        </div>

        <div class="home">
            <p> <?= $button['title'] ?></p>
            <a href="<?= $button['url']; ?>" class="arrow-btn"><?= file_get_contents($svgURL) ?></a>
        </div>

    </div>
</section>
<!-- End error 404 Page -->

<!-- Getting the footer -->
<?php get_footer(); ?>