<!DOCTYPE html>
<html>
<head>
<title>خبرگزاری فارس  </title>
<link href="<?= BASE_URL ?>Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= BASE_URL ?>Public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?= BASE_URL ?>Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?= BASE_URL ?>Public/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="<?= BASE_URL ?>Public/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<script type="text/javascript" src="<?= BASE_URL ?>Public/js/move-top.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>Public/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<!-- header-section-starts-here -->
	<div class="header">
		<div class="header-bottom">
			<div class="logo text-center">
				<a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>Public/images/logo.jpg" alt="" /></a>
			</div>
			<div class="navigation">
				<nav class="navbar navbar-default" role="navigation">
		   <div class="wrap">
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?= BASE_URL ?>">صفحه اصلی</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">اخبار<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= BASE_URL ?>main/news_list" >کل اخبار</a></li>
                                    <?php while($news_cat = $allNews_cat->fetch_assoc()) {?>
                                        <li><a href="news_cat/show_new?id=<?php echo $news_cat["id"]; ?>" > <?php echo $news_cat["title"]; ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </li>
                                <li class="active"><a href="<?= BASE_URL ?>contact_us">تماس با ما</a></li>
                                <li class="active"><a href="<?= BASE_URL ?>">درباره ما</a></li>
                            </ul>
				<div class="search">
					<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
                                                <form action="<?= BASE_URL ?>main/search" method="Post">
								<input class="sb-search-input" placeholder="عبارت جستجو را وارد کنید..." type="search" name="title" id="title">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="<?= BASE_URL ?>Public/js/classie.js"></script>
					<script src="<?= BASE_URL ?>Public/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
			</div>
		</nav>
		</div>

    </div>
    <!-- header-section-ends-here -->