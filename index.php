<?php get_header(); ?>

<!-- start content container -->
<div class="row">

    <div class="col-md-<?php envo_store_main_content_width_columns(); ?>">

	<div class="category">
		<h1 class="site-title h1">Разделы</h1>
		<?php
		echo do_shortcode('[product_categories columns="3" parent="0"]');
	
		?>
	</div>
	<div class="shop">
		<h1 class="site-title h1">Каталог товаров и услуг</h1>
	<?php
		echo do_shortcode('[products limit="6" columns="3" paginate="true"]');	
	?>
	
	</div>
	

	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
