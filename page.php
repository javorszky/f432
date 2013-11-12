<?php get_header(); ?>
<div id="content">
	<div class="row">
		<article class="large-12 columns hentry">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			}

			if( have_posts() ) {
				while( have_posts() ) {
					the_post();
					the_title('<h1>', '</h1>');
					the_content();
				}
			}
			?>
		</article>
	</div>
</div>


<?php get_footer();
