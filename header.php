<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>



	</head>
	<body>
		<header>
			<div class="heading row">
				<div class="large-4 columns">
					<a href="<?php echo home_url(); ?>" id="logo"><span>Oxford</span> Global<br>Language Solutions</a>

				</div>
				<div class="large-3 columns">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/OUP_logo.svg" data-nosvg="<?php echo get_stylesheet_directory_uri(); ?>/images/OUP_logo.png" id="logoimg"></div>
					<!-- <img src="http://www.fillmurray.com/g/179/51" alt="" class="right" id="logoimg"> -->

				</div>
			</div>
			<div class="wrap-subnav">
				<div class="section-container auto" data-section>
					<section class="active">
						<p class="title" data-section-title><a href="#panel1">Section 1</a></p>
						<div class="content" data-section-content>
							<p>Content of section 1.</p>
						</div>
					</section>
					<section>
						<p class="title" data-section-title><a href="#panel2">Section 2</a></p>
						<div class="content" data-section-content>
							<p>Content of section 2.</p>
						</div>
					</section>
				</div>


				<div class="primary-nav-bg"></div>
				<div class="secondary-nav-bg"></div>
				<div id="header_nav">
					<?php
					$args = array(
						'theme_location'  => 'primary',
						'container'       => 'nav',
						'container_class' => 'row',
						'container_id'    => '',
						'menu_id'         => '',
						'menu_class'      => 'large-12 columns',
						'depth'           => 3,
						'walker'          => new Sectioned_Walker_Nav_Menu
					);

					// wp_die( es_preit( array( $args ), false ) );
					wp_nav_menu( $args );
					?>
				</div>

			</div>
		</header>
