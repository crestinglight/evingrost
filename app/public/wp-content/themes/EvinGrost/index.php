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
							'post_type' 		=>  'post',
							'posts_per_page' 	=> -1,
							'post_status'		=> 'publish',
							'orderby' 			=> 'date'
							);

						$allPosts = get_posts( $args );
						$i = 0;

					foreach ($allPosts as $post) {

						$categories = get_the_category(); 
						$categoryName = $categories[0]->cat_name;
						$postIdNumber = get_the_ID();
						$excerptFeatured = get_post_excerpt( $postIdNumber, 55, '...', false );
						$excerpt = get_post_excerpt( $postIdNumber, 35, '...', false );

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

											'<p>' . $excerptFeatured . '</p>' .

										'</div>' . 

									'</div>' .

								'</a>' .

								'<div class="read__more l-read__more read__more--featured l-read__more--featured">
									<a href="' . get_permalink( $post_id ) . '">Read More</a>
								</div>' . 

							'</div>';

							$i++;
						}

						elseif ( $i === 1 ) {

							echo '<div class="l-featured--secondary">' . 

							'<div class="post l-post l-post--featured--secondary">' . 

								'<a href="' . get_permalink( $post_id ) . '">' . 

									'<div class="l-post__image l-post__image--featured">' . 

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

											'<p class="js-overflow">' . $excerpt . '</p>' .

										'</div>' . 

									'</div>' .

								'</a>' .

								'<div class="read__more l-read__more read__more--smaller">
									<a href="' . get_permalink( $post_id ) . '">Read More</a>
								</div>' . 

							'</div>';

							$i++;
						}

						elseif ( $i === 2 ) {

							echo '<div class="post l-post l-post--featured--secondary">' . 

								'<a href="' . get_permalink( $post_id ) . '">' . 

									'<div class="l-post__image l-post__image--featured">' . 

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

											'<p class="js-overflow">' . $excerpt . '</p>' .

										'</div>' . 

									'</div>' .

								'</a>' .

								'<div class="read__more l-read__more read__more--smaller">
									<a href="' . get_permalink( $post_id ) . '">Read More</a>
								</div>' . 

							'</div>' .

							'</div>' .

							'</div>';

							$i++;
						}

						else {

							echo '<div class="post l-post">' . 

								'<a href="' . get_permalink( $post_id ) . '">' . 

									'<div class="l-post__image l-post__image--featured">' . 

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

								'<div class="read__more l-read__more">
									<a href="' . get_permalink( $post_id ) . '">Read More</a>
								</div>' . 

							'</div>';
						}

					}
					?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>