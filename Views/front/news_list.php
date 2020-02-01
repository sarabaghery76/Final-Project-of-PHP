	<div class="main-body">
		<div class="wrap">
			<div class="col-md-8 content-right">
				<div class="articles">
					<header>
                                            <h3 class="title-head">کل اخبار  </h3>
					</header>
					<div class="article">
                                        <?php while($news = $allNews->fetch_assoc()) { ?>	
                                            <br>
						<div class="article-right">
                                                    <a href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><img height="150" src="<?= BASE_URL ?>Public/images/<?php echo $news['pic']; ?>"></a>
						</div>
						<div class="article-left">
							<div class="article-title">
<!--								<p>On Jan 17, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>144 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>74</a></p>-->
                                                                <p>
                                                                    <a class="span_link"><span class="glyphicon glyphicon-comment"></span>تعداد بازدید: <?php echo $news['visit_count']; ?></a>
                                                                </p>
								<a class="title" href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
							</div>
							<div class="article-text">
								<p><?php echo $news['excerpt']; ?></p>
								<a href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><img src="<?= BASE_URL ?>Public/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
                                        <?php } ?>
					</div>
				</div>
				
                                <div class="articles">
					<header>
                                            <h3 class="title-head">
                                                آخرین اخبار      
                                            </h3>
					</header>
					<div class="article">
                                                <?php for($i=1; $i<=10 ; $i++){
                                                      $news = $lastNews->fetch_assoc(); ?>	
                                            <br>
						<div class="article-right">
                                                    <a href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><img height="150" src="<?= BASE_URL ?>Public/images/<?php echo $news['pic']; ?>"></a>
						</div>
						<div class="article-left">
							<div class="article-title">
                                                                <!--<p>On Jan 17, 2015-->
                                                                <p>    
                                                                    <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>تعداد بازدید: <?php echo $news['visit_count']; ?></a>
<!--                                                                    <a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>144 </a>
                                                                    <a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>74</a>-->
                                                                </p>
								<a class="title" href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
							</div>
							<div class="article-text">
								<p><?php echo $news['excerpt']; ?></p>
								<a href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><img src="<?= BASE_URL ?>Public/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
                                        <?php } ?>


					</div>
				</div>
                            
                                <div class="articles">
					<header>
                                            <h3 class="title-head">
                                                پربازدیدترین اخبار      
                                            </h3>
					</header>
					<div class="article">
                                                <?php for($i=1; $i<=10 ; $i++){
                                                      $news = $most_seen->fetch_assoc(); ?>	

                                            
                                            <br>
						<div class="article-right">
                                                    <a href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><img height="150" src="<?= BASE_URL ?>Public/images/<?php echo $news['pic']; ?>"></a>
						</div>
						<div class="article-left">
							<div class="article-title">
<!--								<p>On Jan 17, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>144 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>74</a></p>-->
                                                                <p>
                                                                    <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>تعداد بازدید: <?php echo $news['visit_count']; ?></a>
                                                                </p>
								<a class="title" href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
							</div>
							<div class="article-text">
								<p><?php echo $news['excerpt']; ?></p>
								<a href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><img src="<?= BASE_URL ?>Public/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
                                        <?php } ?>


					</div>
				</div>
					
				</div>
			<div class="col-md-4 side-bar">
					 <div class="secound_half">
					 <div class="tags">
						<header>
							<h3 class="title-head">تبلیغات</h3>
						</header>
						<p>
						<a class="tag1" href="single.html">

لورم ایپسوم </a>
						<a class="tag2" href="single.html">

لورم ایپسوم </a>
						<a class="tag3" href="single.html">

لورم ایپسوم </a>
						<a class="tag4" href="single.html">

لورم ایپسوم </a>
						<a class="tag5" href="single.html">

لورم ایپسوم </a>
						<a class="tag6" href="single.html">

لورم ایپسوم </a>
						<a class="tag7" href="single.html">

لورم ایپسوم </a>
						<a class="tag8" href="single.html">

لورم ایپسوم </a>
						<a class="tag9" href="single.html">

لورم ایپسوم </a>
						<a class="tag10" href="single.html">

لورم ایپسوم </a>
						<a class="tag11" href="single.html">

لورم ایپسوم </a>
						<a class="tag12" href="single.html">

لورم ایپسوم </a>
						<a class="tag13" href="single.html">

لورم ایپسوم </a>
						<a class="tag14" href="single.html">

لورم ایپسوم </a>
						<a class="tag15" href="single.html">

لورم ایپسوم </a>
						<a class="tag16" href="single.html">

لورم ایپسوم </a>
						<a class="tag17" href="single.html">

لورم ایپسوم </a>
						<a class="tag18" href="single.html">

لورم ایپسوم </a>
						<a class="tag19" href="single.html">

لورم ایپسوم </a>
						<a class="tag20" href="single.html">

لورم ایپسوم </a>
						</p>
					 </div>					 
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- content-section-ends-here -->
	