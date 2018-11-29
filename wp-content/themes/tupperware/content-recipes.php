		<section class="recipes">
			<div class="container">
			
				    <div class="recipe-single-brief">
						<div class="recipe-image">
							<img class="img-thumbnail img-fluid" src="<?php the_field('image');?>" alt="">
							<a class="btn btn-outline-dark mobile-only" href="<?php the_permalink(); ?>" role="button">See more</a>
						</div>
						<div class="recipe-blurb">
							<h3> <?php the_field('title'); ?></h3>
							<p><?php the_field('blurb'); ?></p>
							<a class="btn btn-outline-dark" href="<?php the_permalink(); ?>" role="button">See more</a>
						</div>
					</div>
			

	
			</div>
		</section>