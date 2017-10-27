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

				<?php 

					$args = array( 
						'post_type' =>  'post',
						'posts_per_page' => -1,
						'orderby' => 'date'
						);

					$allPosts = get_posts( $args ); 

					if ( have_posts() ) {
						while ( have_posts() ) {

							the_post(); 

							$categories = get_the_category(); 
							$cat_name = $categories[0]->cat_name;
							$excerpt = get_post_excerpt( $postIdNumber, 55, '...', false );
							
							echo '<div class="post l-post">' . 

								'<a href="' . get_permalink( $post_id ) . '">' . 

									'<div class="l-post__image l-post__image--featured">' . 

										'<img src="' . get_field( 'preview_image' ) . '">' .
										'<span class="category l-category">' . $cat_name . '</span>' .

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