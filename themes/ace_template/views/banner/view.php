<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'Banners'=>array('admin'),
	$model->id,
);
?>

 
<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Banner
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php echo $model->title; ?>
		</small>
		<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New ', array('create'), array('class' => 'btn btn-primary fRight',  'style'=>'margin:0 10px;')); ?>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> All Banners', array('admin'), array('class' => 'btn btn-success fRight',  'style'=>'margin:0 10px;')); ?>
		<?php echo CHtml::link('<i class="ace-icon fa fa-edit"></i> Edit', array('update', 'id' => $model->id), array('class' => 'btn btn-danger fRight', 'style'=>'margin:0 10px;')); ?>	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php echo $model->title; ?></span> </h5>

				<div class="widget-toolbar">
					<a href="#" data-action="fullscreen" class="orange2">
						<i class="ace-icon fa fa-expand"></i>
					</a>

					<a href="#" data-action="reload">
						<i class="ace-icon fa fa-refresh"></i>
					</a>

					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>

					<a href="#" data-action="close">
						<i class="ace-icon fa fa-times"></i>
					</a>
				</div>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					 <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'photo',
		'event_id',
		'priority',
		'event_link',
		'created_by',
		'created_on',
		'updated_by',
		'updated_on',
		'status',
	),
)); ?> 
					 
				</div>
			</div>
		</div>
	</div>
</div>