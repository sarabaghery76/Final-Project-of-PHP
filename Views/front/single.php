	<div class="main-body">
		<div class="wrap">
			<div class="col-md-8 content-right">
				<div class="articles">
                                        <?php 
                                           $new = $one_new->fetch_assoc();
                                        ?>
					<header>
                                            <h3 class="title-head">
                                                <?php echo $new['title']; ?>       
                                            </h3>
					</header>
					<div class="article">
                                            <br>
						<div class="article-right">
                                                    <img height="150" src="<?= BASE_URL ?>Public/images/<?php echo $new['pic']; ?>">
						</div>
						<div class="article-left">
							<div class="article-title">
                                                            <p>
                                                                <span class="glyphicon glyphicon-comment"></span>تعداد بازدید: <?php echo $new['visit_count']; ?>
                                                            </p>
<!--								<p>On Jan 17, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>144 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>74</a></p>-->
                                                            <p style="text-align: justify;">
                                                            <a class="title"><?php echo $new['excerpt']; ?></a>
                                                            </p>
							</div>
						</div>
                                                <p>
							<div class="article-text">
                                                            <p style="text-align: justify;"><?php echo $new['content']; ?></p>
								<div class="clearfix"></div>
							</div>
                                                </p>
                                                
						<div class="clearfix"></div>


					</div>
                                    
				</div>
				
                                <div class="response">
					<h4>پیام ها</h4>
					<div class="media response-info">
                                            <?php 
                                                while($comment = $comments->fetch_assoc()){
                                            ?>
						<div class="media-right response-text-right">
							<a href="#">
								<img class="media-object" src="<?= BASE_URL ?>Public/images/icon1.png" alt=""/>
							</a>
                                                    <h5><a> <?php echo $comment['name']; ?> </a></h5>
						</div>
						<div class="media-body response-text-left">
                                                    <p> <?php echo $comment['message']; ?> </p>
                                                </div>
                                            <div class="clearfix"> </div>
                                            <?php }
                                                mysqli_data_seek($comments, 0);
                                            ?>
                                        </div>
				</div>	
                            
                                    <h3>ارسال پیام</h3>
          <!--			  <p class="contact_msg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>-->
                                    <form method="POST" action="<?= BASE_URL ?>news/insertcomment">
                                                  <div class="to">
                                                      <input hidden name="id" value="<?php echo $new['id']; ?>">
                                                      <input type="text" name="name" class="text" placeholder="نام" >
                                                      <input type="text" name="email" class="text" placeholder="ایمیل" style="margin-right:20px">
                                                  </div>
                                                  <div class="text">
                                                      <textarea name="message" placeholder="پیام"></textarea>
                                                  </div><br>
                                                  <div class="clearfix"> </div>
                                                  <div class="form-submit1">
                                                      <input name="ارسال پیام" type="submit" id="submit" value="ارسال پیام"></br></br>
                                                      <p>
                                                          <div class="alert-danger <?= isset($errors) ? "show" : ""; ?>">
                                                              <?= isset($errors) ? $errors : ''; ?>
                                                          </div>
                                                          <div class="alert-success <?= isset($successfully) ? "show" : ""; ?>">
                                                              <?= isset($successfully) ? $successfully : ''; ?>
                                                          </div>
                                                      </p>
                                                      <p class="m_msg"></p>
                                                  </div>
                                    </form>
					
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
	