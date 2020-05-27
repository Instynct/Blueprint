        <?php
            $contact = get_field('contact', 'options');
            $contact_address = $contact['address'];
            $social_medias = get_field('social_medias', 'options');
            $social_medias_list = $social_medias['social_medias'];
            $newsletter = get_field('newsletter', 'options');
            $newsletter_title = $newsletter['title'];
            $credits = get_field('credits', 'options');
            $credits_instynct = $credits['link_instynct'];
        ?>
        <footer id="footer">
            <section id="contact">
                <div class="container">
                    <div class="contact-infos">
                        <h2><?php echo $contact['title'] ?></h2>
                        <a href="<?php echo $contact_address['url'] ?>" target="<?php echo $contact_address['target'] ?>"><?php echo $contact_address['title'] ?></a>
                        <a href="tel:+<?php echo $contact['phone_number'] ?>" target="_blank"><?php echo $contact['phone_number'] ?></a>
                    </div>
                    <div class="contact-social-medias">
                        <h2><?php echo $social_medias['title'] ?></h2>
                        <ul>
                            <?php foreach ($social_medias_list as $social_media) { ?>
                				<?php $social_media_single = $social_media['social_media']; ?>
                                <?php $social_media_link = $social_media_single['link']; ?>
                				<li>
                                    <a href="<?php echo $social_media_link['url'] ?>" target="<?php echo $social_media_link['target'] ?>">
                                        <?php echo $social_media_single['icon'] ?>
                                    </a>
                                </li>
                			<?php } ?>
                        </ul>
                    </div>
                    <div class="contact-newsletter">
                        <img src="<?php echo $newsletter_title['url'] ?>" alt="<?php echo $newsletter_title['alt'] ?>">
                        <img class="arrow" src="<?php bloginfo('template_url')?>/dist/svg/SNOROS-Fleche-temporaire.svg" alt="Flèche">
                        <div class="newsletter-form">
                            <?php echo do_shortcode($newsletter['form_shortcode']); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="credits">
                <p>
                    ©
                    <script>document.write(new Date().getFullYear())</script>
                    <?php echo $credits['text'] ?>
                    <a href="<?php echo $credits_instynct['url'] ?>" target="<?php echo $credits_instynct['target'] ?>"><?php echo $credits_instynct['title'] ?></a>
                </p>
            </section>
        </footer>

        <script src="<?php bloginfo('template_url')?>/dist/js/main.min.js" async></script>

		<script>
			(function (d, t, g) {
				var ph    = d.createElement(t), s = d.getElementsByTagName(t)[0];
				ph.type   = 'text/javascript';
				ph.async   = true;
				ph.charset = 'UTF-8';
				ph.src     = g + '&v=' + (new Date()).getTime();
				s.parentNode.insertBefore(ph, s);
			})(document, 'script', '//instynctweb.com/?p=883&ph_apikey=25901b5b5b33bac0e67c0d14229cde6d');
		</script>

        <?php wp_footer(); ?>

    </body>
</html>
