</div>
<?php if( is_front_page() ) { ?>
<div id="footer" class="home-footer">
<?php } else { ?> 
<div id="footer">

<?php } ?>


<div class="container-footer">
<a href="http://maxtestdomain.com/marie-curtis/">Home</a>
<a href="http://maxtestdomain.com/marie-curtis/about/">About</a>
<a href="http://maxtestdomain.com/marie-curtis/inventory/">Inventory</a>
<a href="http://maxtestdomain.com/marie-curtis/interior-design/">Interior Design</a>
<a href="http://maxtestdomain.com/marie-curtis/contact/">Contact</a>

<br>
</div>

<span>&#169; <?php echo date('Y'); ?> Marie Curtis. All Rights Reserved. Website Designed by <a href="http://ventamarketing.com/" rel="designer">Venta Marketing</a></span>
</div>


</div>
<?php wp_footer(); ?>
<script  type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightbox.js"></script>
<!-- Include the Sidr JS -->
<script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sidr/jquery.sidr.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

</body>
</html>