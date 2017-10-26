<?php include 'header-blog.php'; ?>

	<div class="hero__wrapper--blog l-hero__wrapper--blog">

		<div class="hero--blog l-hero l-hero--blog">

			<h1>

				<span>Learn</span>
				<span>Create</span>
				<span>Get Inspired</span>

			</h1>

		</div>

	</div>

	<div class="blog l-blog">

		<h1>Welcome to the Blog</h1>

		<div class="blog__wrapper l-blog__wrapper">

			<div class="blog__posts l-blog__posts">

				<div class="l-feature__block">

						<?php 

							$args = array( 
								'numberposts' => 3,
								'post_type' =>  'post',
								'posts_per_page' => -1,
								'orderby' => 'date'
								);

							$allPosts = get_posts( $args );
							$i = 0;

						foreach ($allPosts as $post) {

							$categories = get_the_category(); 
							$categoryName = $categories[0]->cat_name;
							$postIdNumber = get_the_ID();
							$excerpt = get_post_excerpt( $postIdNumber, 75, '...', false );

							if ($i === 0) {

								echo '<div class="post l-post post--featured l-post--featured js-featured">' .

									'<a href="' . get_permalink( $post_id ) . '">' .

										'<div class="l-post__image">' .

											'<img src="' . get_field( 'preview_image' ) . '">' .
											'<span class="category l-category">' . $categoryName . '</span>' .

										'</div>' .

										'<div class="post__summary l-post__summary">' .

											'<div class="post__title l-post__title">' . 

												'<h1>' . get_the_title() . '</h1>' . 

											'</div>' . 

											'<div class="post__date l-post__date">' . 

												'<span>' . get_the_date() . '</span>' .

											'</div>' . 

											'<div class="post__excerpt l-post__excerpt">' .

												'<p>' . $excerpt . '</p>' .

											'</div>' . 

										'</div>' .

									'</a>' .

								'</div>';
							}

							$i++;

						}
						?>

						<!-- <a href="#">

							<div class="l-post__image">

								<img src="assets/images/placeholder/UI.jpg">
								<span class="category l-category">Design</span>

							</div>

							<div class="post__summary l-post__summary">

								<div class="post__title l-post__title">

									<h1>Principles of Great Design</h1>

								</div>

								<div class="post__date l-post__date">

									<span>October 22, 2017</span>

								</div>

								<div class="post__excerpt l-post__excerpt">

									<p>Nam ut aliquam diam. Phasellus congue enim vel malesuada iaculis. Vivamus congue eu quam sit amet elementum. Vestibulum in facilisis tellus, at interdum quam...</p>

								</div>

							</div>

						</a> -->

						<div class="read__more l-read__more read__more--featured l-read__more--featured">
							<a href="#">Read More</a>
						</div>

					</div>

					<div class="post l-post js-postTop post--smaller">

						<a href="#">

							<div class="l-post__image l-post__image--featured">

								<img src="assets/images/placeholder/construction.jpg">
								<span class="category l-category">Tutorials</span>

							</div>

							<div class="post__summary l-post__summary">

								<div class="post__title l-post__title">

									<h1>HTML: The Building Blocks of Web Design</h1>

								</div>

								<div class="post__date l-post__date">

									<span>October 20, 2017</span>

								</div>

								<div class="post__excerpt l-post__excerpt">

									<p class="js-overflow">Vestibulum rutrum condimentum quam, at aliquet enim viverra in. Duis nec tincidunt tortor, dapibus ullamcorper nisi. Aliquam faucibus vel ante sed molestie. Donec et enim pulvinar, mattis risus sed, ornare quaren...</p>

								</div>

							</div>

						</a>

						<div class="read__more l-read__more read__more--smaller">
							<a href="#">Read More</a>
						</div>

					</div>

					<div class="post l-post js-postBottom post--smaller">

						<a href="#">

							<div class="l-post__image l-post__image--featured">

								<img src="assets/images/placeholder/art.jpg">
								<span class="category l-category">Design</span>

							</div>

							<div class="post__summary l-post__summary">

								<div class="post__title l-post__title">

									<h1>Let's Get Inspired!</h1>

								</div>

								<div class="post__date l-post__date">

									<span>October 19, 2017</span>

								</div>

								<div class="post__excerpt l-post__excerpt">

									<p class="js-overflow">Phasellus finibus, risus at sagittis lacinia, mi arcu finibus arcu, vitae elementum tellus nunc tempus orci. In sit amet enim nec est sollicitudin blandit. Duis fermentum ut mi...</p>

								</div>

							</div>

						</a>

						<div class="read__more l-read__more read__more--smaller">
							<a href="#">Read More</a>
						</div>

					</div>

				</div>

				<div class="post l-post">

					<a href="#">

						<div class="l-post__image">

							<img src="assets/images/placeholder/security.jpg">
							<span class="category l-category">Tutorials</span>

						</div>

						<div class="post__summary l-post__summary">

							<div class="post__title l-post__title">

								<h1>Cyber Security Made Easy</h1>

							</div>

							<div class="post__date l-post__date">

								<span>October 17, 2017</span>

							</div>

							<div class="post__excerpt l-post__excerpt">

								<p>Quisque sit amet lacus vitae justo mollis vestibulum. Aliquam ultrices pretium sem, quis dapibus justo varius pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

							</div>

						</div>

					</a>

					<div class="read__more l-read__more">
						<a href="#">Read More</a>
					</div>

				</div>

				<div class="post l-post">

					<a href="#">

						<div class="l-post__image">

							<img src="assets/images/placeholder/color.jpg">
							<span class="category l-category">Inspiration</span>

						</div>

						<div class="post__summary l-post__summary">

							<div class="post__title l-post__title">

								<h1>A Guide to Color: Catching Eyes and Turning Heads</h1>

							</div>

							<div class="post__date l-post__date">

								<span>October 11, 2017</span>

							</div>

							<div class="post__excerpt l-post__excerpt">

								<p>Phasellus finibus, risus at sagittis lacinia, mi arcu finibus arcu, vitae elementum tellus nunc tempus orci. In sit amet enim nec est sollicitudin blandit. Duis fermentum ut mi at lobortis. Phasellus et ultrices quam. In nec leo facilisis, semper odio vel, lacinia diam...</p>

							</div>

						</div>

					</a>

					<div class="read__more l-read__more">
						<a href="#">Read More</a>
					</div>

				</div>

				<div class="post l-post">

					<a href="#">

						<div class="l-post__image">

							<img src="assets/images/placeholder/marketing.jpg">
							<span class="category l-category">Tutorials</span>

						</div>

						<div class="post__summary l-post__summary">

							<div class="post__title l-post__title">

								<h1>SEO Basics</h1>

							</div>

							<div class="post__date l-post__date">

								<span>October 9, 2017</span>

							</div>

							<div class="post__excerpt l-post__excerpt">

								<p>In sit amet enim nec est sollicitudin blandit. Duis fermentum ut mi at lobortis. Phasellus et ultrices quam. In nec leo facilisis, semper odio vel, lacinia diam. In mollis vestibulum fermentum. Pellentesque a metus sed ipsum suscipit fringilla vulputate nec metus...</p>

							</div>

						</div>

					</a>

					<div class="read__more l-read__more">
						<a href="#">Read More</a>
					</div>

				</div>

				<div class="post l-post">

					<a href="#">

						<div class="l-post__image">

							<img src="assets/images/placeholder/theme.jpg">
							<span class="category l-category">Design</span>

						</div>

						<div class="post__summary l-post__summary">

							<div class="post__title l-post__title">

								<h1>Template or No? Why Custom Themes are Better</h1>

							</div>

							<div class="post__date l-post__date">

								<span>October 4, 2017</span>

							</div>

							<div class="post__excerpt l-post__excerpt">

								<p>Quisque imperdiet ex mi, ac vestibulum neque imperdiet ut. Vestibulum quis sapien magna. Etiam sed feugiat elit, eget feugiat augue...</p>

							</div>

						</div>

					</a>

					<div class="read__more l-read__more">
						<a href="#">Read More</a>
					</div>

				</div>

				<div class="post l-post">

					<a href="#">

						<div class="l-post__image">

							<img src="assets/images/placeholder/city.jpg">
							<span class="category l-category">Design</span>

						</div>

						<div class="post__summary l-post__summary">

							<div class="post__title l-post__title">

								<h1>Contrast and Beauty in Monochrome</h1>

							</div>

							<div class="post__date l-post__date">

								<span>August 27, 2017</span>

							</div>

							<div class="post__excerpt l-post__excerpt">

								<p>In tempus eros magna, vitae fermentum metus cursus nec. Quisque imperdiet ex mi, ac vestibulum neque imperdiet ut. Vestibulum quis sapien magna. Etiam sed feugiat elit, eget feugiat augue. Cras ullamcorper ut sapien eu maximus. Sed vulputate mauris odio, vel mattis ex tincidunt non...</p>

							</div>

						</div>

					</a>

					<div class="read__more l-read__more">
						<a href="#">Read More</a>
					</div>

				</div>

				<div class="post l-post">

					<a href="#">

						<div class="l-post__image">

							<img src="assets/images/placeholder/flex.jpg">
							<span class="category l-category">Tutorials</span>

						</div>

						<div class="post__summary l-post__summary">

							<div class="post__title l-post__title">

								<h1>Flexbox is Magic</h1>

							</div>

							<div class="post__date l-post__date">

								<span>October 22, 2017</span>

							</div>

							<div class="post__excerpt l-post__excerpt">

								<p>Vestibulum quis sapien magna. Etiam sed feugiat elit, eget feugiat augue. Cras ullamcorper ut sapien eu maximus. Sed vulputate mauris odio, vel mattis ex tincidunt non...</p>

							</div>

						</div>

					</a>

					<div class="read__more l-read__more">
						<a href="#">Read More</a>
					</div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>