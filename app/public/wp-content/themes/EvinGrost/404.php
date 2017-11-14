<!DOCTYPE html>
<html>
<head>
	<title>Evin Grost - Developer | Designer | Illustrator</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Oxygen|Oswald" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">

</head>
<body>

	<div class="thanks l-thanks">

		<h1>Oops!</h1>

		<p>404 - I couldn't find the page you're looking for. Try one of the links below instead.</p>

		<div class="links l-links">

			<a href="<?php echo home_url(); ?>">Back to Home</a>

			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>">Check out the Blog</a>

		</div>

	</div>

		<div class="footer l-footer l-footer--special">

			<div class="socials l-socials">

				<a href="https://twitter.com/evingrost" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png">
				</a>

				<a href="https://github.com/crestinglight" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/github.png">
				</a>

				<a href="https://www.linkedin.com/in/evingrost" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin.png">
				</a>

			</div>

			<p>&copy; Evin Grost 2017</p>

		</div>

	</body>
	</html>