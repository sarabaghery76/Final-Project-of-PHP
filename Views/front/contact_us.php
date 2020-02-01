	<!-- content-section-starts-here -->
	<div class="main-body">
		<div class="wrap">
		<ol class="breadcrumb">
			  <li><a href="<?= BASE_URL ?>">صفحه اصلی</a></li>
			  <li class="active">تماس با ما</li>
			</ol>

			<!--contact-section-starts-->
				<div class="contact-section">
	<header>
		<h2 class="heading text-center">آدرس ما</h2>
	</header>
     <div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
	 </div>
	 <div class="contact_grid">
	 	  <div class="col-md-8 contact-top">
			  <h3>ارسال پیغام</h3>
<!--			  <p class="contact_msg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>-->
                          <form method="POST" action="<?= BASE_URL ?>contact_us/insertMessage">
					<div class="to">
                                            <input type="text" name="name" class="text" placeholder="نام" >
                                            <input type="text" name="email" class="text" placeholder="ایمیل" style="margin-right:20px">
                                            <input type="text" name="title" class="text" placeholder="موضوع" style="margin-right:20px">
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
         <div class="col-md-4 contact-top_left">
			  <h3>اطلاعات تماس</h3>
			  <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
			  <ul class="contact_info">
			  	<li><span>88454816</span></li>
			  	<li><span class="msg"><a href="malito:info@barnamenevisan.org">info@barnamenevisan.org</a></span></li>
			  </ul>
	 	</div>
		<div class="clearfix"></div>
     </div>
</div>

			<!--contact-section-ends-->
		</div>
		</div>
	<!-- content-section-ends-here -->