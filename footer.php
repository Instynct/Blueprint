</main>
<?php
$copyright = get_field('copyright', 'options');
?>
<footer class="footer" id="contact">
    <div class="container">

        <div class="wrapper">
            <div class="top-footer">
                <div class="logo"><img src="<?= $footerLogo['url'] ?>" alt="<?= $footerLogo['title'] ?>"></div>
            </div>
        </div>
        <div class="copyright">
            <p><?= $copyright ?> <a href="https://instynctweb.com/">Instynct</a></p>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>