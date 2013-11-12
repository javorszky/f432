<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="heading-bg">
				<div class="heading row">
					<div class="large-4 columns">
						<a href="<?php echo home_url(); ?>" id="logo"><span>Oxford</span> Global<br>Language Solutions</a>

					</div>
					<div class="large-3 columns">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/OUP_logo.svg" data-nosvg="<?php echo get_stylesheet_directory_uri(); ?>/images/OUP_logo.png" id="logoimg">
						<!-- <img src="http://www.fillmurray.com/g/179/51" alt="" class="right" id="logoimg"> -->

					</div>
				</div>
			</div>
			<div class="primary-nav-bg">
				<div id="header_nav" class="row">
					<?php
					$args = array(
						'theme_location'  => 'primary',
						'container'       => 'nav',
						'container_class' => 'row',
						'container_id'    => '',
						'menu_id'         => '',
						'menu_class'      => 'large-12 columns',
						'depth'           => 3
						// 'walker'          => new Sectioned_Walker_Nav_Menu
					);

					// wp_die( es_preit( array( $args ), false ) );
					wp_nav_menu( $args );
					?>
				</div>

			</div>


			</div>
		</header>
