<?php include 'header-blog.php'; ?>

	<div class="post__header l-post__header">

		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>">All Posts</a>

		<div class="nextPrev l-nextPrev">

			<?php previous_post_link('%link','Previous', TRUE); ?>

			<?php

			if( (!get_next_post_link('%link','Next', TRUE) == "") && (!get_previous_post_link('%link','Previous', TRUE) == "") ){
				echo '<span>|</span>';
			}
			?>

			<?php next_post_link('%link','Next', TRUE); ?>

		</div>

	</div>

	<div class="post__image l-post__image">

		<img src="<?php echo get_field( 'header_image' ); ?>">

	</div>

	<div class="post__content l-post__content">

		<h1><?php echo get_the_title(); ?></h1>

		<h4><?php echo get_the_date(); ?></h4>

		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				the_content();
			}
		} 
		?>

	</div>

<?php get_footer(); ?>