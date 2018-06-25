<?php
/* @var $this GalleryFloorController */
/* @var $model GalleryFloor */

$this->breadcrumbs=array(
	'Gallery Floors'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GalleryFloor', 'url'=>array('index')),
	array('label'=>'Create GalleryFloor', 'url'=>array('create')),
	array('label'=>'Update GalleryFloor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GalleryFloor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GalleryFloor', 'url'=>array('admin')),
);
?>

<h1>View GalleryFloor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'gallery_id',
		'remark',
	),
)); ?>
