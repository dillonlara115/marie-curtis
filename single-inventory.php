<?php get_header(); ?>
<article class="container">
<?php the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php if( get_field('second_image') ) { ?>
		<div class="inventory-main-image-container"><?php
			$image1 = get_field('image');
			$image2 = get_field('second_image');?>
			<div><a href="<?php echo $image1['url']; ?>" data-lightbox="group" class="first-image"><img src="<?php echo $image1['url']; ?>" /></a> </div>
			<div><a href="<?php echo $image2['url']; ?>" data-lightbox="group"><img src="<?php echo $image2['url']; ?>" /></a>    </div>
			<?php if( get_field('third_image') ) { 
			$image3 = get_field('third_image');?>
			<div><a href="<?php echo $image3['url']; ?>"  data-lightbox="group"><img src="<?php echo $image3['url']; ?>" /> </a>  </div>
			<?php } ?>
			<?php if( get_field('fourth_image') ) { 
			$image4 = get_field('fourth_image');?>
			<div><a href="<?php echo $image4['url']; ?>" data-lightbox="group"><img src="<?php echo $image4['url']; ?>" /> </a>  </div>
			<?php } ?>
		</div>
	<?php } else { 
		$image1 = get_field('image');?>
		<div class="inventory-main-image-container">
			<div><a href="<?php echo $image1['url']; ?>" data-lightbox="group"><img src="<?php echo $image1['url']; ?>" /></a> </div>
		</div>
	<?php } ?>
	<div class="inventory-main-content-container">
		<p><strong>Inventory Number:</strong> <?php the_field( 'inventory_number' ) ?></p>
		<p><strong>Overall Size:</strong> <?php the_field( 'overall_size' ) ?></p>
		<p><strong>Frame Opening:</strong>	<?php the_field( 'frame_opening' ) ?></p>
		<p><strong>Status:</strong>	<?php the_field( 'status' ) ?></p>
		<p><strong>Price:</strong>	$<?php the_field( 'price' ) ?></p>
	</div>

		<div class="inventory-main-description-container">
			<h2>Product Description</h2>
			<p><?php the_field( 'description' ) ?></p>
			<a href="javascript:window.print()" class="link">Print Tear Sheet</a>
		</div>
		<div class="print-info">
			<p><strong>Phone:</strong> 601.259.4450</p>
			<p><strong>Fax:</strong> 314.925.8554</p>
			<p><strong>Email:</strong> <a href="mailto:mcurtiscollection@gmail.com">mcurtiscollection@gmail.com</a></p>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<div style="clear:both;"></div>

</article>

<?php get_footer(); ?>



