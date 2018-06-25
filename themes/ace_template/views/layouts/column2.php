<?php
$this->beginContent('//layouts/main');
//$status = new Status;
$user_id=Yii::app()->user->id;
if (!empty($user_id)){

$company_id=Yii::app()->user->company;
$group_id=Yii::app()->user->group_id;
?>
<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<?php 
				require  "navbar-container.php";
			?>
			<!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div dclass="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						
						<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Dashboard') . '</span>', array('/site/index')); ?>
						<b class="arrow"></b>
					</li>
 					<?php
						if ($group_id=='1'){ //Supper User or Administrator

 					?>	
 					

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> Members</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'User List') . '</span>', array('user/admin')); ?>
								<b class="arrow"></b>
							</li>

							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Add user') . '</span>', array('user/create')); ?>
								<?php //echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Member Types') . '</span>', array('userGroup/admin')); ?>

								<b class="arrow"></b>
							</li>
							 
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> Event</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							 
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Event Category') . '</span>', array('eventCategory/admin')); ?>

								<b class="arrow"></b>
							</li>
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Events') . '</span>', array('event/admin')); ?>

								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Event Celebraties') . '</span>', array('eventCelebraties/admin')); ?>

								<b class="arrow"></b>
							</li>
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Event Social Link') . '</span>', array('eventSocialLink/admin')); ?>

								<b class="arrow"></b>
							</li> 
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Social Link Types') . '</span>', array('socialPageCategory/admin')); ?>

								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Set Event on Gallery Seats') . '</span>', array('ticketCatOngallery/admin')); ?>

								<b class="arrow"></b>
							</li>
 							 
							
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> Ticket Reservation</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Ticket Category') . '</span>', array('ticketCategory/admin')); ?>

								<b class="arrow"></b>
							</li>
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Ticket Reservation Type') . '</span>', array('ticketReservationType/admin')); ?>

								<b class="arrow"></b>
							</li>
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Ticket Reservation Parent') . '</span>', array('ticketReservationParent/admin')); ?>

								<b class="arrow"></b>
							</li>
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Ticket Reservation') . '</span>', array('ticketReservation/admin')); ?>

								<b class="arrow"></b>
							</li> 
							  
						</ul>
					</li>					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> Payments</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Discount Voucher') . '</span>', array('paymentType/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Voucher Category') . '</span>', array('payment/admin')); ?>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> Discount Voucher</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Discount Voucher') . '</span>', array('vouchers/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Voucher Category') . '</span>', array('voucherCategory/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Used Vouchers') . '</span>', array('voucherUsed/admin')); ?>
								<b class="arrow"></b>
							</li>
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Voucher for Users') . '</span>', array('voucherUser/admin')); ?>
								<b class="arrow"></b>
							</li>
 							 
 							 <li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Vouchers in Event') . '</span>', array('voucherEvent/admin')); ?>
								<b class="arrow"></b>
							</li> 
							  
						</ul>
					</li>
					<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-tasks"></i>
									<span class="menu-text">Celebraties Database</span>

									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'All Celebraties') . '</span>', array('artist/admin')); ?>
										<b class="arrow"></b>
									</li>
		 							<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Celebraty Category') . '</span>', array('artistCategory/admin')); ?>
										<b class="arrow"></b>
									</li> 
									  
								</ul>
					</li> 
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text">Payment Options</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Payment Types') . '</span>', array('paymentType/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Payments') . '</span>', array('payment/admin')); ?>
								<b class="arrow"></b>
							</li> 
							  
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text">Gallery/Auditorium </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Manage Galleries') . '</span>', array('gallery/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Gallary Floors') . '</span>', array('galleryFloor/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Gallary Category/Type') . '</span>', array('galleryType/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Gallary Rows') . '</span>', array('galleryRows/admin')); ?>
								<b class="arrow"></b>
							</li>
							<li class="">
								<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Gallary Seats') . '</span>', array('gallerySeat/admin')); ?>
								<b class="arrow"></b>
							</li> 
							 
							  
						</ul>
					</li> 
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> WebSite Management</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-tasks"></i>
									<span class="menu-text">Banner</span>

									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Manage Banner') . '</span>', array('banner/admin')); ?>

										<b class="arrow"></b>
									</li>

									 <li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Banner Status') . '</span>', array('bannerStatus/create')); ?>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-tasks"></i>
									<span class="menu-text">General Texts</span>

									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Text Category') . '</span>', array('genTextCategory/admin')); ?>
										<b class="arrow"></b>
									</li>									
									<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'General Texts') . '</span>', array('genText/admin')); ?>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>				
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-tasks"></i>
									<span class="menu-text">Libraries/Audio/Vedio</span>

									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Library Type') . '</span>', array('libraryType/admin')); ?>

										<b class="arrow"></b>
									</li>

									 <li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Libraries') . '</span>', array('library/admin')); ?>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-tasks"></i>
									<span class="menu-text">News Letter</span>

									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'News Letter Accounts') . '</span>', array('newsLetter/admin')); ?>

										<b class="arrow"></b>
									</li>

									
								</ul>
							</li>
						</ul>
					</li> 
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> General Operations</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-tasks"></i>
									<span class="menu-text">Status Lists</span>

									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Status List') . '</span>', array('status/admin')); ?>

										<b class="arrow"></b>
									</li>

									 <li class="">
										<?php echo CHtml::link('<i class="menu-icon fa fa-caret-right"> </i> <span class="menu-text" >' . Yii::t('Common', 'Status Categories') . '</span>', array('statusCategory/create')); ?>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							 
						</ul>
					</li>
					 
					
					 
 					<?php } ?>
 		 
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
 				<div class="breadcrumbs" id="breadcrumbs">
					<?php /* if (isset($this->breadcrumbs)): ?>
			            <?php
			            $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			                'links' => $this->breadcrumbs,
			                'separator' => '',
			                    //'separator' => '/',
			                    //'separator' => '&DoubleRightArrow;',
			            ));
			            ?>
			        <?php endif */ ?>
			        <div class="breadcrumb">
				        <?php if(isset($this->breadcrumbs)):?>
				        <i class="ace-icon fa fa-home home-icon"></i>
						<?php $this->widget('zii.widgets.CBreadcrumbs', array(
							'links'=>$this->breadcrumbs,
						)); ?><!-- breadcrumbs -->
						<?php endif?>

						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
					</div><!-- /.breadcrumb -->
					


					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->
				</div>
				<div class="page-content">
					 
					<div class="page-content-area">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<?php echo $content; ?>	
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							Application &copy; 2018-2019
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
  <?php $this->endContent();
}else{
	$this->redirect(array('site/login'));
}
   ?>