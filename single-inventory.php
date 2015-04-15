<?php get_header(); ?>
<article class="container">
<?php the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="entry-content">
<h1 class="entry-title"><?php the_title(); ?></h1>
 <img src="<?php the_field( 'image' ) ?>" /> 
<img src="<?php the_field( 'second_image' ) ?>" /> 
<img src="<?php the_field( 'third_image' ) ?>" />  

<!-- <div class="main-sub-video">
    <div class="sub-video-item">
		<img src="<?php the_field( 'image' ) ?>" /> 
    </div>
    <div class="sub-video-item">
		<img src="<?php the_field( 'second_image' ) ?>" />  
    </div>
    <div class="sub-video-item">
		<img src="<?php the_field( 'third_image' ) ?>" /> 
    </div>
</div>

<div class="sub-video-container">
	<div class="sub-video-item">
	  <div class="sub-video-item-image">
	      <img src="<?php the_field( 'image' ) ?>" /> 
	  </div>
	</div>
	<div class="sub-video-item">
	  <div class="sub-video-item-image">
	     <img src="<?php the_field( 'second_image' ) ?>" /> 
	  </div>
	</div>
	<div class="sub-video-item">
	  <div class="sub-video-item-image">
	     <img src="<?php the_field( 'third_image' ) ?>" /> 
	  </div>
	</div>
</div> -->


<strong>Inventory Number:</strong> <?php the_field( 'inventory_number' ) ?>
<strong>Overall Size:</strong> <?php the_field( 'overall-size' ) ?>
<strong>Frame Opening:</strong>	<?php the_field( 'frame_opening' ) ?>

<strong>Price:</strong>	<?php the_field( 'price' ) ?>
<strong>Status:</strong>	<?php the_field( 'status' ) ?>
<h3>Product Description</h3>
	<?php the_field( 'description' ) ?>
</div>

</div>
<?php get_sidebar(); ?>
<div style="clear:both;"></div>

</article>

<?php get_footer(); ?>



