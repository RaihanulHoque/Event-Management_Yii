		<header id="topHead">
			<div class="container">

				<!-- PHONE/EMAIL -->
				<span class="quick-contact pull-left">
					<i class="fa fa-phone"></i> +880-1711-239679 &bull; 
					<a class="hidden-xs" href="mailto:info@tixmart.com.au">info@tixmart.com.au</a>
				</span>
				<!-- /PHONE/EMAIL -->

				<!-- LANGUAGE -->
				<div class="btn-group pull-right hidden-xs">
					<button class="dropdown-toggle language" type="button" data-toggle="dropdown">
						<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> English <span class="caret"></span>
					</button>

					<ul class="dropdown-menu">
						<li>
							<a href="#">
								<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> [US] English
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/flags/de.png" width="16" height="11" alt="DE Language" /> [DE] German
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/flags/fr.png" width="16" height="11" alt="FR Language" /> [FR] French
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/flags/ru.png" width="16" height="11" alt="RU Language" /> [RU] Russian
							</a>
						</li>
					</ul>
				</div>
				<!-- /LANGUAGE -->


				<!-- SIGN IN -->
				<div class="pull-right nav signin-dd">
					<a id="quick_sign_in" href="page-signin.html" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Sign In</span></a>
					<div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

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

						<hr />
						
						<a href="#" class="btn-facebook fullwidth radius3"><i class="fa fa-facebook"></i> Connect With Facebook</a>
						<a href="#" class="btn-twitter fullwidth radius3"><i class="fa fa-twitter"></i> Connect With Twitter</a>
						<!--<a href="#" class="btn-google-plus fullwidth radius3"><i class="fa fa-google-plus"></i> Connect With Google</a>-->

						<p class="bottom-create-account">
							<a href="page-signup.html">Manual create account</a>
						</p>
					</div>
				</div>
				<!-- /SIGN IN -->

				<!-- CART MOBILE BUTTON -->
				<a class="pull-right" id="btn-mobile-quick-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
				<!-- CART MOBILE BUTTON -->

				<!-- LINKS -->
				<div class="pull-right nav hidden-xs">
					<a href="page-about-us.html"><i class="fa fa-angle-right"></i> About</a>
					<a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact</a>
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
				<a class="logo" href="index-2.html">
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/eventek.png" alt="Atropos" />
				</a>

				<!-- Top Nav -->
				<div class="navbar-collapse nav-main-collapse collapse pull-right">
					<nav class="nav-main mega-menu">
						<ul class="nav nav-pills nav-main scroll-menu" id="topMain">
							<li class="dropdown active">
								<a class="dropdown-toggle" href="index.php">
									Home <i class="fa fa-angle-down"></i>
								</a>
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

																<li><a href="events.php?r=cr"><i class="fa fa-star-o"></i> Ongoing Events</a></li>
																
																<li class="dropdown-submenu">
																	<a href="#"><i class="fa fa-check-square-o"></i> Contact</a>
																	<ul class="dropdown-menu">
																		<li><a href="contact-us.php">Contact</a></li>
																		<li><a href="contact-us-2.html">Version 2</a></li>
																		<li><a href="contact-us-3.html">Version 3</a></li>
																		<li><a href="contact-us-4.html">Version 4</a></li>
																	</ul>
																</li>
 															</ul>
														</li>
													</ul>
												</div>

												<div class="col-md-4">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">
																<li><a href="events.php?r=up"><i class="fa fa-check-square-o"></i> Upcoming Events</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-4">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">
																<li><a href="events.php?r=pst"><i class="fa fa-check-square-o"></i> Past Events</a></li>
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
									<b>Celebraties or Artist</b> <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="celebraties.php?r=bn">Bangladeshi</a></li>
									<li class="divider"></li>
									<li><a href="celebraties.php?r=in">Indian</a></li>
									<li class="divider"></li>
									<li><a href="celebraties.php?r=au">Australian</a></li>
								</ul>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="clients.php">
									Organizers 
								</a>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="clients.php">
									Video 
								</a>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="clients.php">
									Music 
								</a>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="clients.php">
									Gallery 
								</a>
							</li>
							<li class="">
								<a class="dropdown-toggle" href="clients.php">
									Contact 
								</a>
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

							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<span class="badge pull-right">3</span>
								
								<div class="quick-cart-content">

									<p><i class="fa fa-warning"></i> You have 3 products on your cart</p>

									<a class="item" href="shop-product-full-width.html"><!-- item 1 -->
										<img class="pull-left" src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/demo/shop/thumb/1.jpg" width="40" alt="quick cart" />
										<div class="inline-block">
											<span class="title">Man shirt XL</span>
											<span class="price">2 &times; $44.00</span>
										</div>
									</a><!-- /item 1 -->

									<a class="item" href="shop-product-full-width.html"><!-- item 2 -->
										<img class="pull-left" src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/demo/shop/thumb/2.jpg" width="40" alt="quick cart" />
										<div class="inline-block">
											<span class="title">Great Black Shoes For Man and Only Man...</span>
											<span class="price">2 &times; $44.00</span>
										</div>
									</a><!-- /item 2 -->

									<a class="item" href="shop-product-full-width.html"><!-- item 3 -->
										<img class="pull-left" src="<?php echo Yii::app()->request->baseUrl;?>/assets/images/demo/shop/thumb/4.jpg" width="40" alt="quick cart" />
										<div class="inline-block">
											<span class="title">Pink Lady Perfect Shoes</span>
											<span class="price">1 &times; $67.32</span>
										</div>
									</a><!-- /item 3 -->

									<!-- QUICK CART BUTTONS -->
									<div class="row cart-footer">
										<div class="col-md-6 nopadding-right">
											<a href="shop-cart.html" class="btn btn-primary btn-xs fullwidth">VIEW CART</a>
										</div>
										<div class="col-md-6 nopadding-left">
											<a href="shop-cc-pay.html" class="btn btn-info btn-xs fullwidth">CHECKOUT</a>
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
 

