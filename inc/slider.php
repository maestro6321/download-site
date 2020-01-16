			<section id="metro-box">
				<?php

				$q2=new WP_Query(
					array("category_name"=>"slider_big","posts_per_page"=>3 )
				);
				$c=0;
				while ($q2->have_posts()) {
					$c++;
					$q2->the_post();
					?>
					<div class="column">
						<div class="metro-item big">
							<div class="box-img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
								<div class="metro-content">
									<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									<div class="description"><p>
										<?php the_excerpt(""); ?>


									</p>
								</div>
							</div>
						</div>
					</div>

					<?php

					$q=new WP_Query(
						array("category_name"=>"slider_small","posts_per_page"=>4,"paged"=>c )
					);
					while ($q->have_posts()) {
						$q->the_post();
						?>

						<div class="metro-item">
							<div class="box-img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
								<div class="metro-content color_<?php echo rand(1,3); ?>">
									<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									<div class="description"><p>
										<?php the_excerpt(""); ?>
									</p>
								</div>
							</div>
						</div>
					</div>



					<?php


				}

				?>


			</div>






			<?php

		}

		?>





	</section>	