<?php get_header(); ?>
<div class="clear"></div>
<?php include("inc/slider.php"); ?>

<div class="p-container">
	<div class="p-post">
		<div class="ourpost">
			<h3>مطالب پیشنهادی</h3>
			<div class="demo">
				<ul>

					<?php

					$q=new WP_Query(
						array("posts_per_page"=>14,"paged"=>c )
					);
					while ($q->have_posts()) {
						$q->the_post();
						?>

						
						<li><?php the_post_thumbnail(); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span><?php if(function_exists('the_views')) { the_views(); } ?></span></li>


					<?php
				}



					
					?>
				</ul>
			</div>
		</div>
		<div class="ads_in"><ul><?php dynamic_sidebar( 'ali_middle_ads' ); ?></ul></div>
		<div class="clear"></div>	


		<?php 

		while (have_posts()) {
			the_post();
			?>

			<article class="post">
				<header>
					<div class="post-title">
						<h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
					</div>
				</header>
<!-- 					<div class="post-img">
						<img src="<?php the_post_thumbnail(); ?>/images/firefox.jpg" alt="">
					</div> -->
					<div class="post-content">
						<?php the_content(""); ?>
					</div>
					<footer>
						<div>
							<a href="#" onmouseover="tooltip.pop(this,'#sub1<?php the_id(); ?>',{position:0,effect:'slide'})"><span class="fa fa-user fa-2x"></span></a>
							<div style="display: none;">
								<div id="sub1<?php the_id(); ?>">نویسنده : <?php the_author(); ?></div>
							</div>
						</div>
						<div>
							<a href="#" onmouseover="tooltip.pop(this,'#sub2<?php the_id(); ?>',{position:0,effect:'slide'})"><span class="fa fa-comments-o fa-2x"></span></a>
							<div style="display: none;">
								<div id="sub2<?php the_id(); ?>"><?php echo get_comments_number(); ?></div>
							</div>
						</div>
						<div>
							<a href="#" onmouseover="tooltip.pop(this,'#sub3<?php the_id(); ?>',{position:0,effect:'slide'})"><span class="fa fa-sitemap fa-2x"></span></a>
							<div style="display: none;">
								<div id="sub3<?php the_id(); ?>"><?php the_category(" "); ?></div>
							</div>
						</div>
						<div>
							<a href="#" onmouseover="tooltip.pop(this,'#sub4<?php the_id(); ?>',{position:0,effect:'slide'})"><span class="fa fa-tags fa-2x"></span></a>
							<div style="display: none;">
								<div id="sub4<?php the_id(); ?>"><?php the_tags(""); ?></div>
							</div>
						</div>
						<div>
							<a href="#" onmouseover="tooltip.pop(this,'#sub5<?php the_id(); ?>',{position:0,effect:'slide'})"><span class="fa fa-calendar fa-2x"></span></a>
							<div style="display: none;">
								<div id="sub5<?php the_id(); ?>"><?php echo get_the_date("yy,m,d"); ?></div>
							</div>
						</div>
						<div class="more-link">
							<a href="<?php the_permalink(); ?>">ادامه مطلب</a>
						</div>
					</footer>					
				</article>

				<?php
			}

			


			?>





			<nav class="post">
				<?php wp_pagenavi(); ?>
			</nav>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
