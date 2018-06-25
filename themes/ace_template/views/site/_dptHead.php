
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$user_id=Yii::app()->user->id;
$company=Yii::app()->user->company;
$shop_id=Yii::app()->user->shop_id;
$group_id=Yii::app()->user->group_id;

?>
<div class="page-content-area">

<div class="page-header">
			<h1>
				Dashboard
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					<strong><?php echo CHtml::encode(Yii::app()->name); //want to Show Department Name here ?> </strong> Department Head Loged in
				</small>
			</h1>
		</div><!-- /.page-header -->
		
		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>

					<i class="ace-icon fa fa-check green"></i>

					Welcome to
					<strong class="green">
						<?php echo CHtml::encode(Yii::app()->name); ?>
						<small>(v 0.1)</small>
					</strong>
				</div> 

			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content-area -->


 