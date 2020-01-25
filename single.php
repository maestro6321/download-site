<?php get_header(); ?>
<div class="clear"></div>
<!-- <?php include("inc/slider.php"); ?> -->

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			<div class="p-post">
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

					</footer>					
				</article>

				<?php
			}




			?>
			<div class="clear"></div>
			<div class="container">
				<div class="row post-meta">
					<div class="col">
						<a href="#" class="download" onmouseover="tooltip.pop(this,'#sub10',{position:0,effect:'slide'})">
							<span class="fa fa-download fa-lg"></span> دانلود
						</a>
						<div style="display: none;">
							<div id="sub10"> download </div>
						</div>
					</div>
					<div class="col">
						<a href="#" class="help" onmouseover="tooltip.pop(this,'#sub11',{position:0,effect:'slide'})">
							<span class="fa fa-life-ring fa-lg"></span>راهنما
						</a>
						<div style="display: none;">
							<div id="sub11"><?php echo nl2br(get_post_meta(get_the_id(),"help",true)); ?></div>
						</div>
					</div>
					<div class="col">
						<a href="#" class="pass" onmouseover="tooltip.pop(this,'#sub12',{position:0,effect:'slide'})">
							<span class="fa fa-key fa-lg"></span>رمز عبور
						</a>
						<div style="display: none;">
							<div id="sub12"><?php echo get_post_meta(get_the_id(),"password-file",true); ?></div>
						</div>
					</div>
					<div class="col">
						<a href="#" class="info" onmouseover="tooltip.pop(this,'#sub13',{position:0,effect:'slide'})">
							<span class="fa fa-info fa-lg"></span>مشخصات فایل
						</a>
						<div style="display: none;">
							<div id="sub13">مشخصات فایل</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="related">
				<h4>مطالب مرتبط</h4>
				<ul>
					<li>
						<a href="#" class="info" onmouseover="tooltip.pop(this,'#sub14',{position:0,effect:'slide'})">
							<img src="images/slider/4.jpg" alt="">
							<div style="display: none;">
								<div id="sub14">مشخصات فایل</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="info" onmouseover="tooltip.pop(this,'#sub14',{position:0,effect:'slide'})">
							<img src="images/slider/4.jpg" alt="">
							<div style="display: none;">
								<div id="sub14">مشخصات فایل</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="info" onmouseover="tooltip.pop(this,'#sub14',{position:0,effect:'slide'})">
							<img src="images/slider/4.jpg" alt="">
							<div style="display: none;">
								<div id="sub14">مشخصات فایل</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="info" onmouseover="tooltip.pop(this,'#sub14',{position:0,effect:'slide'})">
							<img src="images/slider/4.jpg" alt="">
							<div style="display: none;">
								<div id="sub14">مشخصات فایل</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="info" onmouseover="tooltip.pop(this,'#sub14',{position:0,effect:'slide'})">
							<img src="images/slider/4.jpg" alt="">
							<div style="display: none;">
								<div id="sub14">مشخصات فایل</div>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="info" onmouseover="tooltip.pop(this,'#sub14',{position:0,effect:'slide'})">
							<img src="images/slider/4.jpg" alt="">
							<div style="display: none;">
								<div id="sub14">مشخصات فایل</div>
							</div>
						</a>
					</li>
				</ul>
			</div>

			
		</div>
	</div>
	<div class="col-lg-3 col-md-4" id="a25"><?php get_sidebar(); ?></div>
</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
