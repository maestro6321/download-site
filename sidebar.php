			<aside class="left-sidebar">
				<section class="sidebox">
					<h3>آخرین مطالب</h3>
					<ul>

						<?php
						$q=new WP_Query(
							array("posts_per_page"=>9)
						);
						while ($q->have_posts()) {
							$q->the_post();
							?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></li>

							<?php
						}
						wp_reset_postdata();


						?>
					</ul>
				</section>
				<section class="sidebox">
					<h3>پر دیدگاه ترین ها</h3>
					<ul>
						<?php
						$q=new WP_Query(
							array(
								"posts_per_page"=>9,
								"orderby"=>"comment_count",
								"order"=>"DECS"
							)
						);
						while ($q->have_posts()) {
							$q->the_post();
							?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></li>

							<?php
						}
						wp_reset_postdata();


						?>
						
					</ul>
				</section>
				<section class="sidebox">
					<h3>تبلیغات</h3>
					<?php dynamic_sidebar( 'ali_sidebar_ads' ); ?>
				</section>
				<section class="ads">
					<h3>تبلیغات متنی</h3>
					<ul>
						<?php dynamic_sidebar( 'ali_sidebar_ads_text' ); ?>
						
					</ul>
				</section>
				<section class="sidebox">
					<h3>پر بازدیدترین ها</h3>
					<ul>
						<?php
						$q=new WP_Query(
							array(
								"posts_per_page"=>9,
								"meta_key"=>"views",
								"orderby"=>"meta_value_num",
								"order"=>"DECS"
							)
						);
						while ($q->have_posts()) {
							$q->the_post();
							?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></li>

							<?php
						}
						wp_reset_postdata();


						?>
						
					</ul>
				</section>
			</aside>