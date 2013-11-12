	<footer>
		<div class="row">
			<div class="large-3 columns">
				<p class="i">
					Tailored solutions from a trusted partner
				</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/OUP_logo-white.svg" alt="" id="smallogo">
			</div>

			<?php
			$args = array(
				'theme_location'  => 'footer',
				'container'       => 'div',
				'container_class' => 'large-6 columns',
				'menu_class'      => 'row',
				'depth'           => 1,
			);
			wp_nav_menu( $args );
			?>
			<div class="large-3 columns legal">
				<p>
					Copyright &copy;<?php echo date('Y'); ?><br>
					Oxford University Press <br>
					All rights reserved
				</p>
				<p><a href="#">site credits</a></p>
			</div>

		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
