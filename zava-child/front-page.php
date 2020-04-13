<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>
		
		<h2>Example 3 column grid (included)</h2>
		<div class="wrapper-grid grid3">
			<div>Grid item</div>
			<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris laoreet risus eget tortor egestas, quis euismod augue finibus. Quisque vestibulum egestas felis ac suscipit.</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
		</div>
		
		<h2>Example 4 column grid (included)</h2>
		<div class="wrapper-grid grid4">
			<div>Grid item</div>
			<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris laoreet risus eget tortor egestas, quis euismod augue finibus. Quisque vestibulum egestas felis ac suscipit.</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
			<div>Grid item</div>
		</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
