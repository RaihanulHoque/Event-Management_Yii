 <div id="shop">
	<!-- PAGE TITLE -->
	<header id="page-title">
		<div class="container">
			<h1>About us</h1>

			<ul class="breadcrumb">
				<?php echo CHtml::link('<i class="menu-icon fa fa-tachometer"> </i> <span class="menu-text" >' . Yii::t('Common', 'Home') . '</span>', array('/site/index')); ?>
				<li class="active">About us</li>
			</ul>
		</div>
	</header>
	<section class="container">

		<div class="row" style="margin: 0 auto; text-align:left;">
			<!-- CONTACT -->
			<div class="col-md-12">
					  
			<?php 
			
				echo $model->detail;
				
			?>
			</div>
		</div>
	</section>
</div>