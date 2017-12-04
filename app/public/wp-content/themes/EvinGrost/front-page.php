<?php get_header(); ?>

	<div class="about l-about" id="about">

		<h1>About</h1>

		<div class="l-services">

			<div class="service l-service">

				<div class="service__icon l-service__icon">
					<img src="<?php bloginfo("template_directory"); ?>/assets/images/icon_Design.png">
				</div>

				<h2>Design</h2>

				<p>Stand out from the crowd with a beautiful, distinctive design that'll draw eyeballs from all over the web.</p>

			</div>

			<div class="service l-service">

				<div class="service__icon l-service__icon">
					<img src="<?php bloginfo("template_directory"); ?>/assets/images/icon_UI.png">
				</div>

				<h2>User Experience</h2>

				<p>From satisfying clickables to animated menus, together we can create an experience that your users will love to interact with.</p>

			</div>

			<div class="service l-service">

				<div class="service__icon l-service__icon">
					<img src="<?php bloginfo("template_directory"); ?>/assets/images/icon_Code.png">
				</div>

				<h2>Code</h2>

				<p>Database management and server-side code are essential. No matter your goals, your site should just work.</p>

			</div>

		</div>

		<div class="about__me l-about__me">

			<div class="l-about__image">
				<img src="<?php bloginfo("template_directory"); ?>/assets/images/me.png">
			</div>

			<div class="l-about__description">

				<h2>Who is this?</h2>

				<p>Hello there, my name is Evin. I'm the full-stack web developer at <a href="http://www.redstoneweb.com/" target="_blank">Redstone Advertising</a> in the greater Omaha area. From creative design to front-end UI/UX design and back-end development, I love every piece of the web development process. Have an interesting project idea or just want to chat?</p>

			</div>

			<a href="#contact" class="about__contact">Contact me</a>

		</div>

	</div>

	<div class="work l-work" id="work">

		<h1>Work</h1>

		<div class="work__example l-work__example">

			<div class="l-work__image">
				<img src="<?php bloginfo("template_directory"); ?>/assets/images/responsive/lincolnCalling.png">
			</div>

			<div class="l-work__description">

				<h2>Lincoln Calling</h2>
				<h3>Full stack implementation, Wordpress custom theme development</h3>

				<p>Lincoln Calling is an annual, non-profit music festival focusing on emerging artists and occurring across multiple indoor/outdoor venues in downtown Lincoln, Nebraska. In its first year operated by the nonprofit Hear Nebraska, the 2016 Lincoln Calling featured 120 bands and comedians across eight venues, drawing more than 6,000 music lovers to downtown Lincoln.</p>

			</div>

			<a href="http://lincolncalling.com/" target="_blank">Visit Site</a>

		</div>

		<hr>

		<div class="work__example l-work__example l-work--reverse">

			<div class="l-work__image">
				<img src="<?php bloginfo("template_directory"); ?>/assets/images/responsive/redstone.png">
			</div>

			<div class="l-work__description">

				<h2>Redstone Advertising</h2>
				<h3>Full stack implementation, Wordpress custom theme development</h3>

				<p>Redstone is a marketing and communications firm. They drive sales and brand preference with integrated solutions across the dimensions of audience, message and channel.</p>

			</div>

			<a href="https://www.redstoneweb.com/" target="_blank">Visit Site</a>

		</div>

		<hr>

		<div class="work__example l-work__example">

			<div class="l-work__image">
				<img src="<?php bloginfo("template_directory"); ?>/assets/images/responsive/cerious.png">
			</div>

			<div class="l-work__description">

				<h2>Cerious Technologies</h2>
				<h3>Design, UI/UX design, Full stack implementation</h3>

				<p>Cerious Technologies is a leader in the audio equipment community, focused on never-before-heard quality at an affordable price. Each of their cables are handmade and filled with the highest grade synthetic materials. View the site live now!</p>

			</div>

			<a href="http://cerioustechnologies.com/" target="_blank">Visit Site</a>

		</div>

		<hr>

		<div class="work__more l-work__more">

			<h2>Want to see more examples of my work?</h2>

			<a href="mailto:hello@evingrost.com" target="_blank">Email me</a>

		</div>

	</div>

	<div class="thoughts l-thoughts" id="thoughts">

		<h1>Thoughts</h1>

		<div class="blogs l-blogs">

			<?php 

				$args = array( 
					'numberposts'		=> '3'
				);

				$recent_posts = wp_get_recent_posts( $args );

			foreach ($recent_posts as $recent) {

				$postIdNumber = $recent["ID"];
				$excerpt = get_post_excerpt( $postIdNumber, 30, '...', false );

				echo '<a href="' . get_permalink($postIdNumber) . '" class="blog__post l-blog__post">' .

					'<img src="' . get_field("preview_image", $postIdNumber) . '">' .

					'<h2>' . $recent["post_title"] . '</h2>' .

					'<p>' . $excerpt . '</p>' .

					'<div class="view__more l-view__more">

						<span>View this Post</span>

					</div>' . 

				'</a>';

			}
			?>

		</div>

		<div class="blog__all l-blog__all">
			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>">Check out the Blog</a>
		</div>

	</div>

	<div class="contact l-contact" id="contact">

		<h1>Contact</h1>

		<p>Have a question or an awesome idea for a new project? Shoot me a message, I'd love to help you get started, or just to chat.</p>

		<form action="https://formspree.io/evin.grost@gmail.com" method="POST">

			<input type="hidden" name="_subject" value="Personal Site Contact Form" />

			<input type="hidden" name="_next" value="/thanks" />

			<div class="contact__input l-contact__input">
				<label for="name">Name*: </label>
		    	<input type="text" name="name" required>
			</div>

			<div class="contact__input l-contact__input">
			    <label for="email">Email*: </label>
			    <input type="email" name="_replyto" required>
		    </div>

		    <div class="contact__input l-contact__input">
			    <label for="message">Message*: </label>
			    <textarea name="message" rows="4" required></textarea>
		    </div>

		    <input type="submit" value="Send">
		</form>

	</div>

<?php get_footer(); ?>
