<footer id="colophon" class="footer-credits">
<div class="row">
  <div class="col-md-4">
  <?php
			if ( is_active_sidebar( 'aromapolus_left_footer_area' ) ) {
						dynamic_sidebar( 'aromapolus_left_footer_area' );						
					}
			?>
  </div>
  <div class="col-md-4">
  <?php
			if ( is_active_sidebar( 'aromapolus_middle_footer_area' ) ) {
						dynamic_sidebar( 'aromapolus_middle_footer_area' );						
					}
			?>
  </div>
  <div class="col-md-4">
  <?php
			if ( is_active_sidebar( 'aromapolus_right_footer_area' ) ) {
						dynamic_sidebar( 'aromapolus_right_footer_area' );						
					}
			?>
  </div>
</div>
	<div class="text-center">
		<?php printf( __( 'Proudly powered by %s', 'envo-store' ), '<a href="' . esc_url( __( 'https://wordpress.org/', 'envo-store' ) ) . '">WordPress</a>' ); ?>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s', 'envo-store' ), '<a href="http://envothemes.com/envo-store/">Envo Store</a>', 'EnvoThemes' ); ?>
		<span class="sep"> | </span>
		<?php printf( __( '%s - Разработка web-проектов', 'envo-store' ), '<a href="' . esc_url( __( 'http://vandraren.ru/', 'envo-store' ) ) . '">VANDRAREN</a>' ); ?>
	</div>      
</footer> 
<!-- end main container -->
</div>
<?php wp_footer(); ?>
</body>
</html>
