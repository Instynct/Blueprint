<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */
?>

<!-- Internet Explorer -->
<script>
    navigator.sayswho = (function() {
        var ua = navigator.userAgent,
            tem,
            M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
            return {
                name: 'IE ',
                version: (tem[1] || '')
            };
        }
        if (M[1] === 'Chrome') {
            tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
            if (tem != null) {
                return {
                    name: tem.slice(1)[0],
                    version: tem.slice(1).join(' ').replace('OPR', 'Opera')
                };
            }
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
        return {
            name: M[0],
            version: M[1]
        };
    })();
    // Redurection internet explorer
    if (navigator.sayswho.name == "IE ") {
        window.location.href = "/internet-explorer";
    }
</script>

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
<!-- End Internet Explorer Page -->

<!-- Getting the footer -->
<?php get_footer(); ?>