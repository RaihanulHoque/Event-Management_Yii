<?php
/* @var $this GallerySeatController */
/* @var $model GallerySeat */

$this->breadcrumbs=array(
	'Gallery Seats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GallerySeat', 'url'=>array('index')),
	array('label'=>'Create GallerySeat', 'url'=>array('create')),
	array('label'=>'View GallerySeat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GallerySeat', 'url'=>array('admin')),
);
?>

<h1>Update GallerySeat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>