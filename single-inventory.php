<?php get_header(); ?>
<article class="container">
<?php the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="entry-content">
	<h1 class="entry-title"><?php the_title(); ?></h1>
<?php if( get_field('second_image') ) { ?>
	<div class="inventory-main-image-container">
		<img src="<?php the_field( 'image' ) ?>" /> 
		<img src="<?php the_field( 'second_image' ) ?>" />  
		<img src="<?php the_field( 'third_image' ) ?>" /> 
	</div>

	<div class="sub-image-container">
		<div class='sub-slide'><img src="<?php the_field( 'image' ) ?>" /> </div>
		<div class='sub-slide'><img src="<?php the_field( 'second_image' ) ?>" /> </div>
		<div class='sub-slide'><img src="<?php the_field( 'third_image' ) ?>" /> </div>
	</div>
<?php } else { ?>
	<div class="inventory-main-image-container">
		 <img src="<?php the_field( 'image' ) ?>" /> 
	</div>
<?php } ?>
	<p><strong>Inventory Number:</strong> <?php the_field( 'inventory_number' ) ?></p>
	<p><strong>Overall Size:</strong> <?php the_field( 'overall-size' ) ?></p>
	<p><strong>Frame Opening:</strong>	<?php the_field( 'frame_opening' ) ?></p>

	<p><strong>Price:</strong>	<?php the_field( 'price' ) ?></p>
	<p><strong>Status:</strong>	<?php the_field( 'status' ) ?></p>
	<div class="inventory-main-description-container">
		<h2>Product Description</h2>
		<p><?php the_field( 'description' ) ?></p>
	</div>
</div>
</div>

<?php get_sidebar(); ?>
<div style="clear:both;"></div>

</article>

<?php get_footer(); ?>



