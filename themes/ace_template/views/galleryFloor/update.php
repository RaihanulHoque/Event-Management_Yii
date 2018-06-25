<?php
/* @var $this GalleryFloorController */
/* @var $model GalleryFloor */

$this->breadcrumbs=array(
	'Gallery Floors'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryFloor', 'url'=>array('index')),
	array('label'=>'Create GalleryFloor', 'url'=>array('create')),
	array('label'=>'View GalleryFloor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GalleryFloor', 'url'=>array('admin')),
);
?>

<h1>Update GalleryFloor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>