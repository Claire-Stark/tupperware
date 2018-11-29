		<section class="recipes">
			<div class="container">
				<div class="row">
				    <div class="recipe-single">

						<div class="recipe-image col-lg-12 col-sm align-self-center">
							<img class="img-thumbnail img-fluid" src="<?php the_field('image'); ?>" alt="">
						</div>

						<div class="single-recipe-blurb col-sm">
							<h2> <?php the_field('title'); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>

	
			</div>
		</section>