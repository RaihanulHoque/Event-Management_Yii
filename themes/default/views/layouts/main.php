<?php //echo Yii::app()->request->baseUrl; exit()
//$user_id=Yii::app()->user->id;
//$session= session_id();
?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Eventek - Your One Stop Ticketing Solution!</title>
		<meta name="keywords" content="Live Concert Australia, Live Concert, Event, Movies, Music Show, Concert" />
		<meta name="description" content="" />
		<meta name="Author" content="MRH" />
		<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logo_icon.ico" type="image/x-icon">
		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	
		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/superslides.css" rel="stylesheet" type="text/css" />
		<!-- CSS for PRICING -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/pricing.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/slider.revolution.v4/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout-responsive.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/shop.css" rel="stylesheet" type="text/css" /><!-- SHOP -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->
		<!--<link id="css_dark_skin" href="assets/css/layout-dark.css" rel="stylesheet" type="text/css" />--><!-- DARK SKIN -->

		<!-- styleswitcher - demo only -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/red.css" rel="alternate stylesheet" type="text/css" title="red" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/darkgreen.css" rel="alternate stylesheet" type="text/css" title="darkgreen" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/green.css" rel="alternate stylesheet" type="text/css" title="green" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/darkblue.css" rel="alternate stylesheet" type="text/css" title="darkblue" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/brown.css" rel="alternate stylesheet" type="text/css" title="brown" />
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/lightgrey.css" rel="alternate stylesheet" type="text/css" title="lightgrey" />
		<!-- /styleswitcher - demo only -->
		
		<!-- /Customized Design CSS -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/custom.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->

		

		<!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css" />		

		<!-- Morenizr -->
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/modernizr.min.js"></script>
	</head>
	<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->
	
	<header id="topHead">
			<div class="container">
				<!-- PHONE/EMAIL -->
				<span class="quick-contact pull-left">
					<i class="fa fa-phone"></i> +61-413 348 823 &bull; 
					<a class="hidden-xs" href="mailto:eventek@outlook.com.au">info@eventek.com.au</a>
				</span>
				<!-- /PHONE/EMAIL -->

				<!-- LANGUAGE -->
 
				<!-- /LANGUAGE -->


				<!-- SIGN IN -->
				<div class="pull-right nav signin-dd">
					<a id="quick_sign_in" href="page-signin.html" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Sign In</span></a>
					<div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">
						<?php /*
						<h4>Sign In</h4>
						
						<form action="#" method="post" role="form">

							<div class="form-group"><!-- email -->
								<input required type="email" class="form-control" placeholder="Username or email">
							</div>

							<div class="input-group">

								<!-- password -->
								<input required type="password" class="form-control" placeholder="Password">
								
								<!-- submit button -->
								<span class="input-group-btn">
									<button class="btn btn-primary">Sign In</button>
								</span>

							</div>

							<div class="checkbox"><!-- remmember -->
								<label>
									<input type="checkbox"> Remember me &bull; <a href="page-signin.html">Forgot password?</a>
								</label>
							</div>

						</form>
						<a href="#" class="btn-facebook fullwidth radius3"><i class="fa fa-facebook"></i> Connect With Facebook</a>
						<a href="#" class="btn-twitter fullwidth radius3"><i class="fa fa-twitter"></i> Connect With Twitter</a>
						<!--<a href="#" class="btn-google-plus fullwidth radius3"><i class="fa fa-google-plus"></i> Connect With Google</a>-->
						*/ 
						?>
						<p class="bottom-create-account">
							<?php echo CHtml::link(Yii::t('Common', 'Login'), array('site/login', ), array('class' => 'btn-labeled')); ?>
						</p>
						<hr />
						
						<p class="bottom-create-account">
							<?php echo CHtml::link(Yii::t('Common', 'Create an Account'), array('user/create', ), array('class' => 'btn-labeled')); ?>
						</p>
					</div>
				</div>
				<!-- /SIGN IN -->

				<!-- CART MOBILE BUTTON -->
				<a class="pull-right" id="btn-mobile-quick-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
				<!-- CART MOBILE BUTTON -->

				<!-- LINKS -->
				<div class="pull-right nav hidden-xs">
					<?php echo '<i class="fa fa-angle-right"></i> '.CHtml::link(Yii::t('Common', 'About'), array('site/about', ), array('class' => 'btn-labeled')); ?>
					<?php echo '<i class="fa fa-angle-right"></i> '.CHtml::link(Yii::t('Common', 'Privacy & Policy'), array('site/privacy', ), array('class' => 'btn-labeled')); ?>
					<?php echo '<i class="fa fa-angle-right"></i> '.CHtml::link(Yii::t('Common', 'Terms & Condition'), array('site/terms', ), array('class' => 'btn-labeled')); ?>
					<?php echo '<i class="fa fa-angle-right"></i> '.CHtml::link(Yii::t('Common', 'Create an Account'), array('site/contact', ), array('class' => 'btn-labeled')); ?>
				</div>
				<!-- /LINKS -->

			</div>
		</header>
		<!-- /Top Bar -->

		<!-- TOP NAV -->
		<header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Logo text or image -->
				<?php  
				
				$image = CHtml::image(Yii::app()->theme->baseUrl.'/assets/images/logo.png', 'EVENTEK', array('class'=>'logo', 'style'=>'width:200px'));
				echo CHtml::link($image, array('site/index'));
				?>
				 

				<!-- Top Nav -->
				<div class="navbar-collapse nav-main-collapse collapse pull-right">
					<nav class="nav-main mega-menu">
						<ul class="nav nav-pills nav-main scroll-menu" id="topMain">
							<li class="dropdown active">
								<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Home') . '</span>', array('/site/index')); ?>
							</li>
							<li class="dropdown mega-menu-item mega-menu-two-columns">
								<a class="dropdown-toggle" href="#">
									Events <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="row">

												<div class="col-md-4">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">

																<li>
																	<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Upcoming Events') . '</span>', array('/event/upcoming')); ?>
																</li>
																
																<li class="dropdown-submenu">
																	<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Events') . '</span>', array('site/contact')); ?>
																</li>
 															</ul>
														</li>
													</ul>
												</div>

												<div class="col-md-4">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">
																<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Upcoming Events') . '</span>', array('/event/upcoming')); ?>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-4">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">
																<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Past Events') . '</span>', array('/event/past')); ?>
															</ul>
														</li>
													</ul>
												</div>		
											</div>
										</div>
									</li>
								</ul>
							</li>
							 
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									Celebraties or Artist <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>																	
										<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Bangladeshi') . '</span>', array('/celebraties/bangla')); ?>
									</li>
									<li class="divider"></li>
									<li>																	
										<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Indian') . '</span>', array('/celebraties/india')); ?>
									</li>
									<li class="divider"></li>
									<li>																	
										<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Australian') . '</span>', array('/celebraties/aus')); ?>
									</li>
								</ul>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="#">
									Organizers 
								</a>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="#">
									Video 
								</a>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="#">
									Music 
								</a>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="#">
									Gallery 
								</a>
							</li>
							<li class="">
								<?php echo CHtml::link('<span class="menu-text" >' . Yii::t('Common', 'Contact') . '</span>', array('site/contact')); ?>

							</li>
							 
							<!-- GLOBAL SEARCH -->
							<li class="search">
								<!-- search form -->
								<form method="get" action="#" class="input-group pull-right">
									<input type="text" class="form-control" name="k" id="k" value="" placeholder="Search">
									<span class="input-group-btn">
										<button class="btn btn-primary notransition"><i class="fa fa-search"></i></button>
									</span>
								</form>
								<!-- /search form -->
							</li>
							<!-- /GLOBAL SEARCH -->
							<?php
								$count_val=TicketReservationParent::getCartQty();
							?>
							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<span class="badge pull-right"><?php print $count_val?></span>
								
								<div class="quick-cart-content">

									<p><i class="fa fa-warning"></i> You have <?php print $count_val?> products on your cart</p>
							
							
<?php 
/*
$this->widget('zii.widgets.grid.CGridView', array(
'id'=>'ticket-reservation-parent-grid',
'dataProvider'=>$model_ticResrv->search_cart($model->id),
'itemsCssClass' => 'table table-bordered table-striped table-hover',
//'template' => '{items}{pager}{summary}',
'template' => '{items}',
//'filter'=>$model_ticResrv,
'columns'=>array(

	array(
		'name' => 'ticket_category',
		'type' => 'raw',
		'value' => 'TicketCategory::getData($data->ticket_category, "title")',
		'htmlOptions' => array('style' => "text-align:left; width:150px; padding-left:10px; "),
	),
	array(
		'name' => 'unit_price',
		'type' => 'raw',
		'value' => '$data->unit_price',
		'htmlOptions' => array('style' => "text-align:center; width:150px;"),
	),
	array(
		'name' => 'num_of_ticket',
		'header'=>'Qty.',
		'type' => 'raw',
		'value' => '$data->num_of_ticket',
		//'value' => 'CHTML::textField("num_of_ticket_".$data->id,$data->num_of_ticket,array("class"=>"form-control", "min"=>"1", "max"=>"10", "onchange"=>"updateQty($data->id, this.value, \'qty\')"))',
		'htmlOptions' => array('style' => "text-align:center; width:70px;"),
	),
	array(
		'name' => 'total_price',
		'type' => 'raw',
		'value' => '$data->total_price',
		'htmlOptions' => array('style' => "text-align:center; width:100px;"),
	),

),
));
*/
 ?>

									<!-- QUICK CART BUTTONS -->
									<div class="row cart-footer">
										<div class="col-md-6 nopadding-right">
											<?php echo CHtml::link('<span class="btn-label"><i class="fa fa-plus"></i></span>' . Yii::t('Common', 'CART'), array('ticketReservationParent/cart', 'uid'=>Yii::app()->user->id, 'sn'=>session_id()), array('class' => 'btn btn-labeled btn-primary')); ?>

										</div>
										<div class="col-md-6 nopadding-left">
											 <?php echo CHtml::link('<span class="btn-label"><i class="fa fa-plus"></i></span>' . Yii::t('Common', 'CHECKOUT'), array('ticketReservationParent/checkout', 'uid'=>Yii::app()->user->id, 'sn'=>session_id()), array('class' => 'btn btn-labeled btn-primary')); ?>

										</div>
									</div>
									<!-- /QUICK CART BUTTONS -->

								</div>

							</li>
							<!-- /QUICK SHOP CART -->

						</ul>
					</nav>
				</div>
				<!-- /Top Nav -->

			</div>

		</header>
		<!-- Headers Area End -->

		<span id="header_shadow"></span>
		<!-- /TOP NAV -->
	
	<!-- WRAPPER -->
		<div id="wrapper">
		
			<?php echo $content; ?>

		</div>
		<!-- /WRAPPER -->

		<!-- FOOTER -->
		<footer>
			<!-- copyright , scrollTo Top -->
			<div class="footer-bar">
				<div class="container">
					<span class="copyright">Copyright &copy; Eventek. All Rights Reserved.</span>
					<a class="toTop" href="#topNav">BACK TO TOP <i class="fa fa-arrow-circle-up"></i></a>
				</div>
			</div>
			<!-- copyright , scrollTo Top -->
			<?php 
			/*
			<!-- footer content -->
			<div class="footer-content">
				<div class="container">

					<div class="row">


						<!-- FOOTER CONTACT INFO -->
						<div class="column col-md-4">
							<h3>CONTACT</h3>

							<p class="contact-desc">
								Atropos is a very powerful HTML5 template, you will be able to create an awesome website in a very simple way.										
							</p>
							<address class="font-opensans">
								<ul>
									<li class="footer-sprite address">
										215/2/3<br />
										Shantibag, Malibag<br />
										Dhaka-1214<br />
									</li>
									<li class="footer-sprite phone">
										Phone: +880-1711-239679
									</li>
									<li class="footer-sprite email">
										<a href="mailto:info@tixmart.com"  onmousedown='return false;' onselectstart='return false;'>info@eventek.com.au</a>
									</li>
								</ul>
							</address>

						</div>
						<!-- /FOOTER CONTACT INFO -->


						<!-- FOOTER LOGO -->
						<div class="column logo col-md-4 text-center">
							<div class="logo-content">
								<img class="animate_fade_in" src="assets/images/icon_large.png" width="200" alt="" />
								<h1 style="color:#fff;font-weight:bold;font-family:'arial'">Eventek</h1>
							</div>											
						</div>
						<!-- /FOOTER LOGO -->


						<!-- FOOTER LATEST POSTS -->
						<div class="column col-md-4 text-right">
							<h3>RECENT POSTS</h3>

							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>

							<a href="blog-masonry-sidebar.html" class="view-more pull-right">View Blog <i class="fa fa-arrow-right"></i></a>

						</div>
						<!-- /FOOTER LATEST POSTS -->

					</div>

				</div>
			</div>
			<!-- footer content -->
			*/ ?>
		</footer>		
		<!-- /FOOTER -->




		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.cookie.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.appear.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.isotope.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/masonry.js"></script>

		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/stellar/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/knob/js/jquery.knob.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/superslides/dist/jquery.superslides.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/styleswitcher/styleswitcher.js"></script><!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/mediaelement/build/mediaelement-and-player.min.js"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/slider.revolution.v4/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/slider.revolution.v4/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/slider_revolution.js"></script>


		<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/scripts.js"></script>


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-XXXXX-X', 'domainname.com');
			ga('send', 'pageview');
		</script>
		-->

	</body>

</html>