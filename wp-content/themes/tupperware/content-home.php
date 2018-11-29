		<section class="recipes">
			<div class="container">
				<div class="row">
				    <div class="recipe-single-brief">
						<div class="recipe-image">
							<img class="img-thumbnail img-fluid" src="<?php the_field('image');?>" alt="">
							<a class="btn mobile-only" href="<?php the_permalink(); ?>" role="button">See more</a>
						</div>
						<div class="recipe-blurb col-sm">
							<h3> <?php the_field('title'); ?></h3>
							<p><?php the_field('blurb'); ?></p>
							<a class="btn" href="<?php the_permalink(); ?>" role="button">See more</a>
						</div>
					</div>
				</div>

	
			</div>
		</section>