<?php
/*
Template Name: Internet Explorer
*/
?>

<!-- Getting the header -->
<?php get_header(); ?>

<!-- Start Internet Explorer Page -->
<?php
$sub_title = get_field("sub_title");
$title = get_field("title");
$button = get_field("button");
$svgURL =  get_bloginfo('template_url') . '/dist/svg/arrow2.svg';
?>
<section class="error iexplorer">
    <div class="grid-container container">
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
<!-- End Internet Explorer Page -->

<!-- Getting the footer -->
<?php get_footer(); ?>