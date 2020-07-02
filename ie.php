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
<section class="error">
    <div class="grid-container">
        <p>
            <?php echo $sub_title ?>
        </p>
        <h2>
            <?php echo $title ?>
        </h2>
        <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"><?php echo $button['title'] ?></a>
    </div>
</section>
<!-- End Internet Explorer Page -->

<!-- Getting the footer -->
<?php get_footer();?>
