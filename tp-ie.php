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
?>
<section class="error iexplorer">
    <div class="error__containerr container">
        <div class="error__content">
            <p class="error__subtitle">
                <?php echo $sub_title ?>
            </p>
            <h2 class="error__title">
                <?php echo $title ?>
            </h2>
        </div>

        <div class="error__cta">
            <p> <?= $button['title'] ?></p>
            <a href="<?= $button['url']; ?>" class="error__button"></a>
        </div>
    </div>
</section>
<!-- End Internet Explorer Page -->

<!-- Getting the footer -->
<?php get_footer(); ?>