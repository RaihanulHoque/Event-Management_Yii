<?php
//echo CHtml::encode(Yii::app()->name);
//print "this is from INDEX </br>";
?>



			
			<!-- REVOLUTION SLIDER -->
			<div class="fullwidthbanner-container roundedcorners">
				<div class="fullwidthbanner">
					<ul>	
						<!-- SLIDE  -->
						<?php print Banner::getGenBanner();?>
						<?php print Banner::getEventBanner();?>
					</ul>

					<div class="tp-bannertimer"></div>
				</div>
			</div>
			<!-- /REVOLUTION SLIDER -->


			<section class="container text-center">
				<h1 class="text-center">
					<strong>Welcome</strong> to Eventek
					<span class="subtitle">Your One Stop Ticketing Solution!</span>
				</h1>
				<p class="lead">Eventek is the emerging ticketing solution to the musical and live entertainment industry and operates in major Australian cities with most advanced ticket sales and delivery network.</p>
			</section>



			<div id="shop">

				<section class="container">

					<div class="row">

						<div class="col-md-9">
 						
							<div class="row">
								<div class="tabs nomargin-top">

									<!-- tabs -->
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab1" data-toggle="tab">
												<i class="fa fa-ticket" style="color:blue;"></i> Ongoing Events
											</a>
										</li>
										<li>
											<a href="#tab2" data-toggle="tab">
												<i class="fa fa-ticket" style="color:red;"></i> Upcomming Events
											</a>
										</li>
									</ul>

									<!-- tabs content -->
									<div class="tab-content" style="height:auto; overflow:auto;">
										<div id="tab1" class="tab-pane active">
											<?php
												echo Event::getOngoingEvents();
											?>
										</div>

										<div id="tab2" class="tab-pane">
											<div class="col-sm-6 col-md-4">
												<div class="item-box">
													<figure>
														<a class="item-hover" href="#">
															<span class="overlay color2"></span>
															<span class="inner">
																<span class="block fa fa-plus fsize20"></span>
																<strong>EVENT DETAIL</strong>
															</span>
														</a>
														<a href="event_detail.php?action=cart_add&amp;product_id=1&amp;product_color=red&amp;product_size=l&amp;product_qty=1" class="btn btn-primary add_to_cart"><i class="fa fa-shopping-cart"></i> BUY TICKET</a>
														<img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/event_photo/thumbs/T1.jpg" width="260" height="400" alt="">
														<div class="styleSecondBackground thumbDate">26 SEP 2018 @6.00 PM</div>
													</figure>
													<div class="item-box-desc">
														<h4>TEST EVENT</h4>
													</div>
												</div>
											</div>
											
											<div class="col-sm-6 col-md-4">
												<div class="item-box">
													<figure>
														<a class="item-hover" href="#">
															<span class="overlay color2"></span>
															<span class="inner">
																<span class="block fa fa-plus fsize20"></span>
																<strong>EVENT DETAIL</strong>
															</span>
														</a>
														<a href="event_detail.php?action=cart_add&amp;product_id=1&amp;product_color=red&amp;product_size=l&amp;product_qty=1" class="btn btn-primary add_to_cart"><i class="fa fa-shopping-cart"></i> BUY TICKET</a>
														<img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/event_photo/thumbs/T1.jpg" width="260" height="400" alt="">
														<div class="styleSecondBackground thumbDate">26 SEP 2018 @6.00 PM</div>
													</figure>
													<div class="item-box-desc">
														<h4>TEST EVENT</h4>
													</div>
												</div>
											</div>

										</div>
									</div>

								</div>
								<!-- items -->
								

							</div>

							<!-- PAGINATION - ->
							<div class="row">

								<div class="col-md-6 text-left">
									<p class="hidden-xs pull-left nomargin padding20">Showing 1-10 of 38 results.</p>
								</div>

								<div class="col-md-6 responsive-text-center text-right">
									<ul class="pagination">
										<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>

							</div>
							<!-- /PAGINATION -->

						</div><!-- /col-md-9 -->

						<aside class="col-md-3" >
							<div class="rightSideAd"style="border:1px solid red; padding:5px; text-align:center;">
								<!--<h3>ADVERTISEMENT</h3> h3 - have no margin-top -->
								<a href="https://www.daraz.com.bd/pohela-boishakh/?utm_campaign=Pohela%20Boishakh%20Main%20LP&utm_medium=Smart%20Link&utm_source=www.daraz.com.bd&dysource=www.daraz.com.bd" target="_blank"><img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/advertisement/daraz.jpg" width="260" alt=""></a>
								
								
								<a href="https://www.daraz.com.bd/pohela-boishakh/?utm_campaign=Pohela%20Boishakh%20Main%20LP&utm_medium=Smart%20Link&utm_source=www.daraz.com.bd&dysource=www.daraz.com.bd" target="_blank"><img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/advertisement/daraz.jpg" width="260" alt=""></a>
								
							</div>

						</aside>

					</div><!-- /row -->

				</section>

			</div>

			<!-- CALLOUT -->
			<section class="container">

				<div class="row bs-callout nomargin-bottom">
					<div class="col-md-8 text-center">
						<h3 class="padding20">Subscribe <strong>now</strong> and get the <strong>latest</strong> offers.</h3>
					</div>
					<div class="col-md-4">

						<p class="nomargin">Type your best E-mail Address</p>

						<form method="get" action="#" class="input-group">
							<input type="text" class="form-control" name="s" id="s" value="" placeholder="E-mail Address" />
							<span class="input-group-btn">
								<button class="btn btn-primary"><i class="fa fa-search"></i></button>
							</span>
						</form>

					</div>
				</div>

			</section>
			<!-- /CALLOUT -->
