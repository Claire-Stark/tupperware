<?php get_header(); ?>

		<section class="hero">

			<div class="hero-image">
				<div class="hero-text">
					<h1>Sarah Nitz - Independent Tupperware Consultant</h1>
				</div>
			</div>

		</section>

		<section class="catalogue">
			<?php

				// The Query
				$args = array('post_type'=> 'catalogue');
				/* this key word MUST match your keyword you've put in your functions.php */
				$the_query = new WP_Query( $args );

				// The Loop

				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					get_template_part('content','catalogue');
					
				}

				/* Restore original Post Data */
				wp_reset_postdata();
				
			?>
		</section>

		<section class="recipes">

		    <div class="container">

		        <div class="row">
		          	<div class="col-lg-12 text-center">

			            <h1 class="section-heading">Recipes</h1>
			            <h3 class="section-subheading text-muted">Check out some tasty recipe ideas!</h3>

		          	</div>
		        </div>

		        <div class="row text-center">

		        	    <?php 
			                // The Query
			            	$args = array('post_type'=>'recipe');
			              $the_query = new WP_Query( $args );

			              // The Loop
			              while ( $the_query->have_posts() ) {
			                  $the_query->the_post();
			                  get_template_part('content','recipe-short');
			                 }
			                
			                /* Restore original Post Data */
			                wp_reset_postdata();
			              
			             ?>

		    	</div>
			
		</section>

		<section class="bottom-hero">
			<div class="bottom-hero-image">
				
			</div>
		</section>

<?php get_footer(); ?>

