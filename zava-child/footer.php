
	</div><!-- #content -->

	<div class="wrapper-site-footer">
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				&copy; <?php echo date('Y'); ?> [company name here]. All rights reserved.
				<span class="sep"> | </span>
				<a href="https://zava.design" target="_blank">Website by Zava Design</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
	
</div><!-- #page -->

<nav id="menu" class="mobile-menu">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
		'container'      => ''
	) );
	?>
</nav>

<?php wp_footer(); ?>

</body>
</html>
