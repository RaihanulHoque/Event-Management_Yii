<?php
/* @var $this GallerySeatController */
/* @var $model GallerySeat */

$this->breadcrumbs=array(
	'Gallery Seats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GallerySeat', 'url'=>array('index')),
	array('label'=>'Create GallerySeat', 'url'=>array('create')),
	array('label'=>'Update GallerySeat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GallerySeat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GallerySeat', 'url'=>array('admin')),
);
?>

<h1>View GallerySeat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'seat_position_tracking',
		'gallery_id',
		'row_id',
		'serial_no',
	),
)); ?>
