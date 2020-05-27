<?php
	$product_ingredients = $product_content['ingredients'];
    $product_contents = $product_content['content'];
	$product_may_contain = $product_content['may_contain'];
    $product_frame = $product_content['frame'];
?>
<div class="product-content">
    <p class="product-content-description"><?php echo $product_content['text'] ?></p>
    <img class="about-separator" src="<?php bloginfo('template_url')?>/dist/svg/snoros-apropos-separateur.svg" alt="Séparateur">
    <ul class="product-ingredients">
        <p><?php echo $product_ingredients['title'] ?></p>
        <?php foreach ($product_ingredients['ingredients'] as $ingredient) { ?>
            <li><?php echo $ingredient['ingredient'] ?></li>
            <span></span>
        <?php } ?>
    </ul>
    <ul class="product-contents">
        <p><?php echo $product_contents['title'] ?></p>
        <?php foreach ($product_contents['products'] as $product) { ?>
            <li><?php echo $product['product'] ?></li>
            <span></span>
        <?php } ?>
    </ul>
	<ul class="product-may-contain">
        <p><?php echo $product_may_contain['title'] ?></p>
        <?php foreach ($product_may_contain['products'] as $may_contain) { ?>
            <li><?php echo $may_contain['product'] ?></li>
            <span></span>
        <?php } ?>
    </ul>
    <div class="product-frame">
        <ul class="product-warnings">
            <?php foreach ($product_frame['warnings'] as $warning) { ?>
                <li><?php echo $warning['warning'] ?></li>
            <?php } ?>
        </ul>
        <img class="warning-border" src="<?php bloginfo('template_url')?>/dist/svg/lessnoros-encadre.svg" alt="Encadré">
    </div>
    <div class="nutritional-values-button">
		<img class="arrow" src="<?php bloginfo('template_url')?>/dist/svg/SNOROS-Fleche-temporaire.svg" alt="Flèche">
        <p><?php echo $product_content['nutritional_values_button'] ?></p>
    </div>
</div>
