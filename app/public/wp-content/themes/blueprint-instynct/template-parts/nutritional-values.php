<div class="nutritional-values-container">
    <div class="nutritional-values-close-button">
        <img src="<?php bloginfo('template_url')?>/dist/svg/snoros-close-icon.svg" alt="X">
        <p><?php echo $product_nutritional_value['button_close'] ?></p>
    </div>
    <img class="nutritional-values-illustration" src="<?php echo $nutrition_facts_illustration['url'] ?>" alt="<?php echo $nutrition_facts_illustration['alt'] ?>">
    <img class="nutritional-values-sub-title" src="<?php echo $nutrition_facts_sub_title['url'] ?>" alt="<?php echo $nutrition_facts_sub_title['alt'] ?>">
    <img class="nutritional-values-local-ingredients-title" src="<?php echo $nutrition_facts_local_ingredients_title['url'] ?>" alt="<?php echo $nutrition_facts_local_ingredients_title['alt'] ?>">
    <div class="nutritional-values-table">
        <img class="table-vertical-line" src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-vertical.svg" alt="Ligne">
        <img class="table-vertical-line" src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-vertical.svg" alt="Ligne">
        <img src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-horizontal.svg" alt="Ligne">
        <ul>
            <p class="table-title"><?php echo $nutrition_facts_table['title'] ?></p>
            <p class="table-sub-title"><?php echo $nutrition_facts_table['sub_title'] ?></p>
            <?php foreach ($nutrition_facts_table['table_lines'] as $table_line) { ?>
				<li>
                    <?php
                        $line_type = $table_line['line_type'];
                    ?>
                    <?php if ($line_type === "Ligne complète") { ?>
                        <img src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-horizontal.svg" alt="Ligne">
                    <?php } elseif ($line_type === 'Demi ligne') { ?>
                        <img class="half-table-line" src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-horizontal.svg" alt="Ligne">
                    <?php } else { ?>
                        <img class="empty-table-line" src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-horizontal.svg" alt="Ligne">
                    <?php } ?>

                    <p class="left-row"><?php echo $table_line['title_quantity'] ?></p>
                    <p class="right-row"><?php echo $table_line['percentage'] ?></p>
				</li>
			<?php } ?>
        </ul>
        <img src="<?php bloginfo('template_url')?>/dist/svg/snoros-table-ligne-horizontal.svg" alt="Ligne">
    </div>
</div>
