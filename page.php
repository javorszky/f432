<?php get_header(); ?>
<div class="page-content">
	<div class="radius-bg"></div>
	<div class="logo"></div>
	<div class="row content">
		<div class="large-5  columns">
			<?php
				if(have_posts()) {
					while(have_posts()) {
						the_post();
						?>
						<div class="the-content"><?php the_content(); ?>
						</div>
		</div>
		<div class="large-7 columns">
			<?php the_post_thumbnail(); ?>
		</div>
			<?php
				}
			}
			?>

	</div>
</div>

<?php get_footer();
