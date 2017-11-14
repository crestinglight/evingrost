<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		    
		    if ( is_home() || is_front_page() ) {
		      echo "Evin Grost - Welcome to the Blog";
		    }

		    elseif ( is_404() ) {
		      echo '404 Error | Page Not Found';
		    }

		    elseif ( is_single() ) {
		      wp_title(''); echo " | "; bloginfo( 'name' );
		    }

		    else {
		      echo wp_title( ' | ', false, right ); bloginfo( 'name' );
		    }
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Oxygen|Oswald|Roboto+Mono" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/scripts/mobileMenu.js"></script>
	
</head>
<body>

	<div class="l-header__wrapper l-header__wrapper--mobile">

		<div class="header header--mobile l-header--mobile">

			<div class="logo l-logo">

				<a href="<?php echo home_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png">
				</a>

			</div>

			<div class="search l-search">

				<?php

				get_search_form();

				?>

			</div>

			<div class="burger l-burger">

				<a href="#" class="js-burger">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/burger.png">
				</a>

			</div>

		</div>

		<div class="navigation l-navigation">

			<ul class="js-nav">

				<?php 

				$category_ids = get_all_category_ids();
				
				$args = array(
					'title_li' => '',
	            	'orderby' => 'id',
	            	'hide_empty' => 0,
	            	'exclude' => 1,
	            	'parent' => 0
				);
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {

					echo '<li><a href="' . get_category_link( $category->term_id ) . '" class="js-navLink">' . $category->name . '</a></li>';
				}


				?>

			</ul>

		</div>

	</div>

	<div class="header__blog--desktop l-header__blog--desktop">

		<div class="logo l-logo">

			<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png">
			</a>

		</div>

		<div class="navigation navigation--blog l-navigation--blog">

			<ul>
				
				<?php 

				$category_ids = get_all_category_ids();
				
				$args = array(
					'title_li' => '',
	            	'orderby' => 'id',
	            	'hide_empty' => 0,
	            	'exclude' => 1,
	            	'parent' => 0
				);
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {

					echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
				}


				?>

			</ul>

		</div>

		<div class="search l-search">

			<?php

			get_search_form();

			?>

		</div>

	</div>