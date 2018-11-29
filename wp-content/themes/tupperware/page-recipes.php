<?php get_header(); ?>


	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			get_template_part('content','page');
			//
		} // end while
	} // end if
	?>

	<?php

		// The Query
		$args = array('post_type'=> 'recipe');
		/* this key word MUST match your keyword you've put in your functions.php */
		$the_query = new WP_Query( $args );

		// The Loop

		while ( $the_query->have_posts() ) {
			$the_query->the_post();

			get_template_part('content','recipes');
			
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		
	?>

<?php get_footer(); ?>

