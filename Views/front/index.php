	<div class="main-body">
		<div class="wrap">
			<div class="col-md-8 content-right">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
                                                    <?php while($sliders = $allSliders->fetch_assoc()) {?>
                                                    <li>
                                                        <img src="<?= BASE_URL ?>Public/images/<?php echo $sliders["address"]; ?>" alt="">
								<div class="caption">
                                                                    <a href="#"> <?php echo $sliders["title"]; ?> </a>
								</div>
                                                    </li>
                                                    <?php } ?>
								
						</ul>
					</div>
				</div>
				<div class="articles">
                                        <?php 
                                            foreach ($allNews_cat2 as $key => $value){ 
                                        ?>
					<header>
                                            <h3 class="title-head">
                                                <?php echo $value['title']; ?>       
                                            </h3>
					</header>
					<div class="article">
                                                <?php foreach($value['news'] as $news)	{ ?>	

                                            
                                            <br>
						<div class="article-right">
                                                    <a href="<?= BASE_URL ?>main/single_new?id=<?php echo $news['id']; ?>"><img height="150" src="<?= BASE_URL ?>Public/images/<?php echo $news['pic']; ?>"></a>
						</div>
						<div class="article-left">
							<div class="article-title">
<!--								<p>On Jan 17, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>144 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>74</a></p>-->
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
                                    <?php                                                                        
                                     }
                                     ?>
				</div>
				
					
				</div>
			<div class="col-md-4 side-bar">
			<div class="first_half">
				<div class="list_vertical">
		         	 	<section class="accordation_menu">
						  <div>
						    <input id="label-1" name="lida" type="radio" checked/>
						   <label for="label-1" id="item1"><i class="ferme"> </i>
                                                    محبوب پست ها
                                                    <i class="icon-plus-sign i-left1"></i><i class="icon-minus-sign i-left2"></i></label>
						    <div class="content" id="a1">
						    	<div class="scrollbar" id="style-2">
								 <div class="force-overflow">
									<div class="popular-post-grids">
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="single.html"><img src="<?= BASE_URL ?>Public/images/bus2.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
												<p>On Feb 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="single.html"><img src="<?= BASE_URL ?>Public/images/bus1.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
												<p>On Apr 14 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="#"><img src="<?= BASE_URL ?>Public/images/bus3.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
												<p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="single.html"><img src="<?= BASE_URL ?>Public/images/bus4.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
												<p>On Jan 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									</div>
                                </div>
                              </div>
						  </div>
						  <div>
						    <input id="label-2" name="lida" type="radio"/>
						    <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>
                                                    <i class="icon-plus-sign i-left1"></i><i class="icon-minus-sign i-left2"></i></label>
						    <div class="content" id="a2">
						       <div class="scrollbar" id="style-2">
								   <div class="force-overflow">
									<div class="popular-post-grids">
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="<?= BASE_URL ?>Public/images/tec2.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
													<p>On Feb 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="<?= BASE_URL ?>Public/images/tec1.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
													<p>On Apr 14 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="<?= BASE_URL ?>Public/images/tec3.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
													<p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="<?= BASE_URL ?>Public/images/tec4.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
													<p>On Jan 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
						    </div>
						  </div>
						  <div>
						    <div class="content" id="a3">
						       <div class="scrollbar" id="style-2">
							    <div class="force-overflow">
								 <div class="response">
						<div class="media response-info">
							<div class="media-right response-text-right">
								<a href="#">
									<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">نام</a></h5>
							</div>
							<div class="media-body response-text-left">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<ul>
									<li>MARCH 21, 2015</li>
									<li><a href="single.html">پاسخ</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-right response-text-right">
								<a href="#">
									<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">نام</a></h5>
							</div>
							<div class="media-body response-text-left">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<ul>
									<li>MARCH 26, 2015</li>
									<li><a href="single.html">پاسخ</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-right response-text-right">
								<a href="#">
									<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">نام</a></h5>
							</div>
							<div class="media-body response-text-left">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<ul>
									<li>MAY 25, 2015</li>
									<li><a href="single.html">پاسخ</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-right response-text-right">
								<a href="#">
									<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">نام</a></h5>
							</div>
							<div class="media-body response-text-left">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<ul>
									<li>FEB 13, 2015</li>
									<li><a href="single.html">پاسخ</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-right response-text-right">
								<a href="#">
									<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">نام</a></h5>
							</div>
							<div class="media-body response-text-left">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<ul>
									<li>JAN 28, 2015</li>
									<li><a href="single.html">پاسخ</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-right response-text-right">
								<a href="#">
									<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">نام</a></h5>
							</div>
							<div class="media-body response-text-left">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<ul>
									<li>APR 18, 2015</li>
									<li><a href="single.html">پاسخ</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-right response-text-right">
								<a href="#">
									<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt="" />
								</a>
								<h5><a href="#">نام</a></h5>
							</div>
							<div class="media-body response-text-left">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
								<ul>
									<li>DEC 25, 2014</li>
									<li><a href="single.html">پاسخ</a></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					</div>

                                </div>
						    </div>
						  </div>
						</section>
					 </div>
					 </div>
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
	