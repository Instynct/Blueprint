<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>
​
<?php
	$hero = get_field('hero');
	$hero_title = $hero['title'];
	$hero_logo = $hero['logo'];
	$hero_illustration = $hero['illustration'];
	$left_waffle = $hero['left_image'];
	$right_waffle = $hero['right_image'];
?>
<section id="hero">
	<div class="container">
		<img src="<?php echo $hero_title['url'] ?>" alt="<?php echo $hero_title['alt'] ?>">
		<h3><?php echo $hero['sub_title'] ?></h3>
		<h4><?php echo $hero['text'] ?></h4>
	</div>
	<img class="hero-logo" src="<?php echo $hero_logo['url'] ?>" alt="<?php echo $hero_logo['alt'] ?>">
	<img class="hero-illustration" src="<?php echo $hero_illustration['url'] ?>" alt="<?php echo $hero_illustration['alt'] ?>">
	<img class="hero-waffles left_waffle" src="<?php echo $left_waffle['url'] ?>" alt="<?php echo $left_waffle['alt'] ?>">
	<img class="hero-waffles right_waffle" src="<?php echo $right_waffle['url'] ?>" alt="<?php echo $right_waffle['alt'] ?>">
</section>

<?php
	$about = get_field('about');
	$about_left_section = $about['left_section'];
	$about_left_section_title = $about_left_section['title'];
	$about_left_section_illustration = $about_left_section['illustration'];
	$about_right_section = $about['right_section'];
	$about_right_section_arnaud = $about_right_section['arnaud_illustration'];
	$about_right_title = $about['right_title'];
?>
<section id="about">
	<p class="sub-title"><?php echo $about['sub_title'] ?></p>
	<div class="container">
		<div class="about-left-section">
			<img class="about-left-section-title" src="<?php echo $about_left_section_title['url'] ?>" alt="<?php echo $about_left_section_title['alt'] ?>">
			<img class="about-left-section-illustration" src="<?php echo $about_left_section_illustration['url'] ?>" alt="<?php echo $about_left_section_illustration['alt'] ?>">
			<p><?php echo $about_left_section['text'] ?></p>
		</div>
		<img class="about-separator" src="<?php bloginfo('template_url')?>/dist/svg/snoros-apropos-separateur.svg" alt="Séparateur">
		<div class="about-separator-vertical">
			<img src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-vertical.svg" alt="Séparateur">
		</div>
		<div class="about-right-section">
			<h4 class="circular-text"><?php echo $about_right_section['title'] ?></h4>
			<img class="about-right-section-arnaud" src="<?php echo $about_right_section_arnaud['url'] ?>" alt="<?php echo $about_right_section_arnaud['alt'] ?>">
			<p><?php echo $about_right_section['text'] ?></p>
		</div>
		<img class="about-right-title" src="<?php echo $about_right_title['url'] ?>" alt="<?php echo $about_right_title['alt'] ?>">
	</div>
</section>

<?php
	$product_1 = get_field('product_1');
	$product_1_main_title = $product_1['main_title'];
	$product_1_secondary_title = $product_1['secondary_title'];
	$product_content = $product_1['product_content'];
	$product_1_illustrated_informations = $product_1['illustrated_informations'];
	$product_1_information_1 = $product_1_illustrated_informations['information_1'];
	$product_1_information_1_illustration = $product_1_information_1['illustration'];
	$product_1_information_2 = $product_1_illustrated_informations['information_2'];
	$product_1_information_2_illustration = $product_1_information_2['illustration'];
	$product_1_main_image = $product_1['main_image'];
	$product_nutritional_value = $product_1['nutritional_values_block'];
	$nutrition_facts_table = $product_nutritional_value['nutrition_facts_table'];
	$nutrition_facts_illustration = $product_nutritional_value['illustration'];
	$nutrition_facts_local_ingredients_title = $product_nutritional_value['local_ingredients_title'];
	$nutrition_facts_sub_title = $product_nutritional_value['sub_title'];
?>
<section id="product-1" class="product-section">
	<p class="sub-title"><?php echo $product_1['sub_title'] ?></p>
	<div class="container">
		<div class="product-1-header">
			<img class="product-1-main-title" src="<?php echo $product_1_main_title['url'] ?>" alt="<?php echo $product_1_main_title['alt'] ?>">
			<img class="product-1-secondary-title" src="<?php echo $product_1_secondary_title['url'] ?>" alt="<?php echo $product_1_secondary_title['alt'] ?>">
		</div>
		<div class="product-1-illustrated-informations">
			<img class="product-1-image" src="<?php echo $product_1_main_image['url'] ?>" alt="<?php echo $product_1_main_image['alt'] ?>">
			<div class="information-1">
				<p><?php echo $product_1_information_1['text'] ?></p>
				<img src="<?php echo $product_1_information_1_illustration['url'] ?>" alt="<?php echo $product_1_information_1_illustration['alt'] ?>">
			</div>
			<div class="information-2">
				<img src="<?php echo $product_1_information_2_illustration['url'] ?>" alt="<?php echo $product_1_information_2_illustration['alt'] ?>">
				<img class="arrow" src="<?php bloginfo('template_url')?>/dist/svg/SNOROS-Fleche-temporaire.svg" alt="Flèche">
				<p><?php echo $product_1_information_2['text'] ?></p>
			</div>
		</div>
		<?php include('template-parts/product-content.php'); ?>
		<div class="nutritional-facts">
			<?php include('template-parts/nutritional-values.php'); ?>
		</div>
	</div>
</section>

<?php
	$product_2 = get_field('product_2');
	$product_2_main_title = $product_2['main_title'];
	$product_2_secondary_title = $product_2['secondary_title'];
	$product_content = $product_2['product_content'];
	$product_2_photo_text = $product_2['photo_text'];
	$product_2_main_image = $product_2['main_image'];
	$product_2_illustration = $product_2['illustration'];
	$product_2_illustrated_information = $product_2['illustrated_information'];
	$product_nutritional_value = $product_2['nutritional_values_block'];
	$nutrition_facts_table = $product_nutritional_value['nutrition_facts_table'];
	$nutrition_facts_illustration = $product_nutritional_value['illustration'];
	$nutrition_facts_local_ingredients_title = $product_nutritional_value['local_ingredients_title'];
	$nutrition_facts_sub_title = $product_nutritional_value['sub_title'];
?>
<section id="product-2" class="product-section">
	<div class="container">
		<div class="product-2-header-container">
			<div class="product-2-header">
				<img class="product-2-main-title" src="<?php echo $product_2_main_title['url'] ?>" alt="<?php echo $product_2_main_title['alt'] ?>">
				<img class="product-2-secondary-title" src="<?php echo $product_2_secondary_title['url'] ?>" alt="<?php echo $product_2_secondary_title['alt'] ?>">
			</div>
			<div class="product-2-image">
				<img class="product-2-photo-text" src="<?php echo $product_2_photo_text['url'] ?>" alt="<?php echo $product_2_photo_text['alt'] ?>">
				<img class="product-2-main-image" src="<?php echo $product_2_main_image['url'] ?>" alt="<?php echo $product_2_main_image['alt'] ?>">
			</div>
		</div>
		<div class="product-2-content-container">
			<div class="product-2-illustrated-informations">
				<img class="product-2-illustration" src="<?php echo $product_2_illustration['url'] ?>" alt="<?php echo $product_2_illustration['alt'] ?>">
				<img class="product-2-illustrated-information" src="<?php echo $product_2_illustrated_information['url'] ?>" alt="<?php echo $product_2_illustrated_information['alt'] ?>">
			</div>
			<?php include('template-parts/product-content.php'); ?>
		</div>
		<div class="nutritional-facts">
			<?php include('template-parts/nutritional-values.php'); ?>
		</div>
	</div>
</section>

<?php
	$dealers = get_field('dealers');
	$dealers_main_title = $dealers['main_title'];
	$dealers_secondary_title = $dealers['secondary_title'];
	$dealers_illustration_1 = $dealers['illustration_1'];
	$dealers_illustration_2 = $dealers['illustration_2'];
	$dealers_adresses_illustration = $dealers['adresses_illustration'];
	$dealers_adresses_illustration_1 = $dealers_adresses_illustration['illustration_1'];
	$dealers_adresses_illustration_2 = $dealers_adresses_illustration['illustration_2'];
	$dealers_adresses_illustration_3 = $dealers_adresses_illustration['illustration_3'];
?>
<section id="dealers">
	<p class="sub-title"><?php echo $dealers['sub_title'] ?></p>
	<div class="container">
		<div class="dealers-header">
			<img class="dealers-main-title" src="<?php echo $dealers_main_title['url'] ?>" alt="<?php echo $dealers_main_title['alt'] ?>">
			<img class="dealers-illustration-1" src="<?php echo $dealers_illustration_1['url'] ?>" alt="<?php echo $dealers_illustration_1['alt'] ?>">
			<img class="dealers-illustration-2" src="<?php echo $dealers_illustration_2['url'] ?>" alt="<?php echo $dealers_illustration_2['alt'] ?>">
			<div class="dealers-secondary-title-container">
				<img class="dealers-secondary-title" src="<?php echo $dealers_secondary_title['url'] ?>" alt="<?php echo $dealers_secondary_title['alt'] ?>">
				<div class="dealers-button">
			        <p><?php echo $dealers['button_see_address'] ?></p>
					<img class="partners-separator" src="<?php bloginfo('template_url')?>/dist/svg/SNOROS-Fleche-temporaire.svg" alt="Flèche">
			    </div>
			</div>
			<div class="dealers-button">
		        <p><?php echo $dealers['button_see_address'] ?></p>
				<img class="partners-separator" src="<?php bloginfo('template_url')?>/dist/svg/SNOROS-Fleche-temporaire.svg" alt="Flèche">
		    </div>
		</div>
		<div class="dealers-list">
			<?php $zones = get_terms('secteurs');
			foreach($zones as $zone) {
			    wp_reset_query();
			    $argsPost = array('post_type' => 'pointsdevente',
			        'tax_query' => array(
			            array(
			                'taxonomy' => 'secteurs',
			                'field' => 'slug',
			                'terms' => $zone->slug,
			            ),
			        ),
			     );

			     $loopPosts = new WP_Query($argsPost);
			     if($loopPosts->have_posts()) { ?>
					 <ul>
						<h3><?php echo $zone->name ?></h3>
 						<img class="partners-separator" src="<?php bloginfo('template_url')?>/dist/svg/snoros-apropos-separateur.svg" alt="Séparateur">
 				        <?php if ( have_posts() ):
							while($loopPosts->have_posts()) : $loopPosts->the_post() ?>
								<li>
									<?php $dealer_address = get_field('address'); ?>
		 				            <h3><?php echo get_the_title() ?></h3>
									<a href="<?php echo $dealer_address['url'] ?>" target="<?php echo $dealer_address['target'] ?>"><?php echo $dealer_address['title'] ?></a>
									<a href="tel:+<?php echo get_field('phone_number'); ?>" target="_blank"><?php echo get_field('phone_number'); ?></a>
								</li>
	 				        <?php endwhile;
						endif;?>
					 </ul>
			     <?php }
			} ?>
			<div class="dealers-button">
		        <p><?php echo $dealers['button_see_address'] ?></p>
				<img src="<?php bloginfo('template_url')?>/dist/svg/SNOROS-Fleche-temporaire.svg" alt="Flèche">
		    </div>
		</div>
	</div>
</section>

<?php
	wp_reset_query();
	$partners = get_field('partners');
	$partners_title = $partners['title'];
	$partners_illustration = $partners['illustration'];
	$partners_list = $partners['partners'];
?>
<section id="partners">
	<div class="container">
		<img class="partners-separator" src="<?php bloginfo('template_url')?>/dist/svg/snoros-apropos-separateur.svg" alt="Séparateur">
		<ul>
			<li>
				<img class="partner-title" src="<?php echo $partners_title['url'] ?>" alt="<?php echo $partners_title['alt'] ?>">
				<img class="arrow" src="<?php bloginfo('template_url')?>/dist/svg/SNOROS-Fleche-temporaire.svg" alt="Flèche">
			</li>
			<?php foreach ($partners_list as $partner) { ?>
				<?php $partner_logo = $partner['logo']; ?>
				<li>
					<img class="partner-logo" src="<?php echo $partner_logo['url'] ?>" alt="<?php echo $partner_logo['alt'] ?>">
				</li>
			<?php } ?>
			<li>
				<img class="partners-illustration" src="<?php echo $partners_illustration['url'] ?>" alt="<?php echo $partners_illustration['alt'] ?>">
			</li>
		</ul>
	</div>
</section>

<script type="text/javascript">
$(window).bind("load resize", function() {
	var dealersIllustrationsClone = '<?php echo '<div class="dealers-list-illustration"><img class="dealers-list-illustration-1" src="' . $dealers_adresses_illustration_1["url"] . '" alt="' . $dealers_adresses_illustration_1["alt"] . '"><img class="dealers-list-illustration-2" src="' . $dealers_adresses_illustration_2['url'] . '" alt="' . $dealers_adresses_illustration_2['alt'] . '"><img class="dealers-list-illustration-3" src="' . $dealers_adresses_illustration_3['url'] . '" alt="' . $dealers_adresses_illustration_3['alt'] . '"></div>'?>';

	var dealersCount = 0;

	var width = $(window).width();

	$('.dealers-list ul').each(function() {
		dealersCount++;
		$(this).attr('id', dealersCount);

		var thisLength = $(this).find('li').length;

		if(thisLength > 3) {
			$(this).addClass('dealer-zone-2-columns');
		}

		if(thisLength > 6) {
			$(this).removeClass('dealer-zone-2-columns');
			$(this).addClass('dealer-zone-3-columns');
		}

		if(width >= 600) {
			if(thisLength > 3) {
				dealersCount++;
			}

			if(thisLength > 6) {
				dealersCount++;
			}
		}
	});

	filterInt = function (value) {
		if (/^(-|\+)?(\d+|Infinity)$/.test(value))
			return Number(value);
		return NaN;
	};

	if(width < 600) {
		$('.dealers-list ul').removeClass('dealer-zone-illustration');
		if ( $('.dealers-list-illustration').length == 0 ) {
			$('.dealers-list ul').each(function() {
				var thisId = $(this).attr('id');
				var thisCount = filterInt(thisId);
				if((thisCount % 3) == 0) {
					$(this).after(dealersIllustrationsClone);
				}
			});
			if((dealersCount % 3) != 0) {
				$('.dealers-list ul').last().after(dealersIllustrationsClone);
			}
		} else {
			$('.dealers-list-illustration').remove();
			$('.dealers-list ul').each(function() {
				var thisId = $(this).attr('id');
				var thisCount = filterInt(thisId);
				if((thisCount % 3) == 0) {
					$(this).after(dealersIllustrationsClone);
				}
			});
			if((dealersCount % 3) != 0) {
				$('.dealers-list ul').last().after(dealersIllustrationsClone);
			}
		}
		$('.dealers-list ul .partners-separator').css('opacity', '1');
		$('.dealers-list ul').find('.partners-separator').addClass('separator-full-width');
		$('.dealers-list ul').find('.partners-separator').removeClass('separator-double-width');
		$('.dealers-list ul').find('.partners-separator').removeClass('separator-triple-width');
	} if(width >= 600) {
		if ( $('.dealers-list-illustration').length > 1 ) {
			$('.dealers-list-illustration').remove();
			$('.dealers-list ul').each(function() {
				var thisId = $(this).attr('id');
				var thisCount = filterInt(thisId);
				if((thisCount % 3) == 0) {
					$(this).addClass('dealer-zone-illustration');
					$(this).after(dealersIllustrationsClone);
				}
			});
		} else {
			$('.dealers-list ul').each(function() {
				var thisId = $(this).attr('id');
				var thisCount = filterInt(thisId);
				if((thisCount % 3) == 0) {
					$(this).addClass('dealer-zone-illustration');
					$(this).after(dealersIllustrationsClone);
				}
			});
		}
		$('.dealers-list-illustration:nth-of-type(2n)').remove();
		$('.dealer-zone-illustration:nth-child(2n)').before(dealersIllustrationsClone);
		$('.dealers-list ul .partners-separator').css('opacity', '0');

		if((dealersCount % 3) != 0) {
			$('.dealers-list ul').last().addClass('dealer-zone-illustration');
			$('.dealers-list ul').last().after(dealersIllustrationsClone);
			$('.dealers-list-illustration').last().remove();
			$('.dealer-zone-illustration').last().before(dealersIllustrationsClone);
		}

		var separatorCount = 1;
		$('.dealers-list ul').each(function() {
			var thisId = $(this).attr('id');
			var thisCount = filterInt(thisId);
			if(thisCount == separatorCount) {
				$(this).find('.partners-separator').css('opacity', '1');
				$(this).find('.partners-separator').removeClass('separator-full-width');
				$(this).find('.partners-separator').addClass('separator-double-width');
				$(this).find('.partners-separator').removeClass('separator-triple-width');
				separatorCount = separatorCount + 3;
			}
		});
		if((dealersCount % 3) != 0) {
			$('.dealer-zone-illustration').last().find('.partners-separator').css('opacity', '1');
			$('.dealer-zone-illustration').last().find('.partners-separator').addClass('separator-full-width');
			$('.dealer-zone-illustration').last().find('.partners-separator').removeClass('separator-double-width');
			$('.dealer-zone-illustration').last().find('.partners-separator').removeClass('separator-triple-width');
		}
		$('.dealer-zone-illustration').find('.partners-separator').css('opacity', '1');
	} if(width >= 1024) {
		$('.dealers-list ul').removeClass('dealer-zone-illustration');
		if ( $('.dealers-list-illustration').length > 1 ) {
			$('.dealers-list-illustration').remove();
			$('.dealers-list ul').each(function() {
				var thisId = $(this).attr('id');
				var thisCount = filterInt(thisId);
				if((thisCount % 3) == 0) {
					$(this).addClass('dealer-zone-illustration');
					$(this).after(dealersIllustrationsClone);
				}
			});
			if((dealersCount % 3) != 0) {
				$('.dealers-list ul').last().after(dealersIllustrationsClone);
			}
		} else {
			$('.dealers-list ul').each(function() {
				var thisId = $(this).attr('id');
				var thisCount = filterInt(thisId);
				if((thisCount % 3) == 0) {
					$(this).addClass('dealer-zone-illustration');
					$(this).after(dealersIllustrationsClone);
				}
			});
			if((dealersCount % 3) != 0) {
				$('.dealers-list ul').last().after(dealersIllustrationsClone);
			}
		}
		$('.dealers-list-illustration:nth-of-type(2n)').remove();
		$('.dealer-zone-illustration:nth-child(2n)').prev().before(dealersIllustrationsClone);

		if((dealersCount % 3) != 0) {
			$('.dealers-list ul').last().addClass('dealer-zone-illustration');
			$('.dealers-list ul').last().after(dealersIllustrationsClone);
			$('.dealers-list-illustration').last().remove();
			$('.dealer-zone-illustration').last().prev().before(dealersIllustrationsClone);
		}

		var separatorCount = 1;
		$('.dealers-list ul').each(function() {
			var thisId = $(this).attr('id');
			var thisCount = filterInt(thisId);
			if(thisCount == separatorCount) {
				$(this).find('.partners-separator').css('opacity', '1');
				$(this).find('.partners-separator').removeClass('separator-full-width');
				$(this).find('.partners-separator').removeClass('separator-double-width');
				$(this).find('.partners-separator').addClass('separator-triple-width');
				separatorCount = separatorCount + 3;
			}
		});
		if((dealersCount % 3) != 0) {
			$('.dealer-zone-illustration').last().find('.partners-separator').css('opacity', '1 !important');
			$('.dealer-zone-illustration').last().find('.partners-separator').removeClass('separator-full-width');
			$('.dealer-zone-illustration').last().find('.partners-separator').removeClass('separator-double-width');
			$('.dealer-zone-illustration').last().find('.partners-separator').addClass('separator-triple-width');
		}
		$('.dealer-zone-illustration').find('.partners-separator').css('opacity', '0');
	}
});

</script>
​
<?php get_footer(); ?>
