<?php
/* @var $this GallerySeatController */
/* @var $model GallerySeat */

$this->breadcrumbs=array(
	'Gallery Seats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GallerySeat', 'url'=>array('index')),
	array('label'=>'Manage GallerySeat', 'url'=>array('admin')),
);
?>

<h1>Create GallerySeat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>