<!-- footer-section-starts-here -->
	<div class="footer">
		<div class="footer-top">
			<div class="wrap">
				<div class="col-md-3 col-xs-6 col-sm-4 footer-grid">
					<h4 class="footer-head">درباره ما</h4>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-2 footer-grid">
					<h4 class="footer-head">دسته بندی</h4>
					<ul class="cat">
                                            <?php while($news_cat = $allNews_cat->fetch_assoc()) {?>
                                            <li>
                                                <a href="news_cat/show_new?id=<?php echo $news_cat["id"]; ?>" > <?php echo $news_cat["title"]; ?></a>
                                            </li>
                                            <?php } ?>
<!--						<li><a href="business.html">تجارت</a></li>
						<li><a href="technology.html">تکنولوژی</a></li>
						<li><a href="entertainment.html">سرگرمی</a></li>
						<li><a href="sports.html">ورزشی</a></li>
						<li><a href="shortcodes.html">
                                                بهداشت و درمان
                                                </a></li>
						<li><a href="fashion.html">مد</a></li>-->
					</ul>
				</div>
				<div class="col-md-4 col-xs-6 col-sm-6 footer-grid">
					<h4 class="footer-head">

لورم ایپسوم</h4>
					<ul class="flickr">
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/bus4.jpg"></a></li>
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/bus2.jpg"></a></li>
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/bus3.jpg"></a></li>
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/tec4.jpg"></a></li>
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/tec2.jpg"></a></li>
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/tec3.jpg"></a></li>
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/bus2.jpg"></a></li>
						<li><a href="#"><img src="<?= BASE_URL ?>Public/images/bus3.jpg"></a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="col-md-3 col-xs-12 footer-grid">
					<h4 class="footer-head">تماس با ما</h4>
					<span class="hq">

لورم ایپسوم یا طرح‌نما</span>
					<address>
						<ul class="location">
							<li><span class="glyphicon glyphicon-map-marker"></span></li>
							<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</li>
							<div class="clearfix"></div>
						</ul>	
						<ul class="location">
							<li><span class="glyphicon glyphicon-earphone"></span></li>
							<li>+0 561 111 235</li>
							<div class="clearfix"></div>
						</ul>	
						<ul class="location">
							<li><span class="glyphicon glyphicon-envelope"></span></li>
							<li><a href="">info@barnamenevisan.org</a></li>
							<div class="clearfix"></div>
						</ul>						
					</address>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
				<div class="copylefts col-md-6">
					<p>

کپی رایت@2015 تمام حقوق مادی و معنوی این سایت متعلق به گروه برنامه نویسان میباشد
<a href="http://www.barnamenevisan.org">برنامه نویسان آینده ساز</a></p>
				</div>
				<div class="footer-social-icons col-md-6">
					<ul>
						<li><a class="facebook" href="#"></a></li>
						<li><a class="twitter" href="#"></a></li>
						<li><a class="flickr" href="#"></a></li>
						<li><a class="googleplus" href="#"></a></li>
						<li><a class="dribbble" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- footer-section-ends-here -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				wrapID: 'toTop', // fading element id
				wrapHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
</body>
</html>
