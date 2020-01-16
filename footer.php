	<footer class="footer-nav">
		<div class="main-footer">
			<div class="about">
				<h5>درباره ما</h5>
				<p>
					<?php dynamic_sidebar( 'ali_about_me' ); ?>
				</p>
			</div>
			<div class="social">
				<h5>با ما همراه باشید</h5>
				<ul>
					<li><a href=""><span class="fa fa-facebook fa-2x"></span></a></li>
					<li><a href=""><span class="fa fa-instagram fa-2x"></span></a></li>
					<li><a href=""><span class="fa fa-twitter fa-2x"></span></a></li>
					<li><a href=""><span class="fa fa-google fa-2x"></span></a></li>
				</ul>
			</div>
			
		</div>
		<div class="clear"></div>
		<div class="footer-bot" role="contentinfo">
			<div class="copyright">
				<p>© 1995-2020, All Rights Reserved.</p>
			</div>
		</div>
		<?php wp_footer(); ?>
	</footer>
</body>
</html>