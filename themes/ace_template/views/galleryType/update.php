<?php
/* @var $this GalleryTypeController */
/* @var $model GalleryType */

$this->breadcrumbs=array(
	'Gallery Types'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryType', 'url'=>array('admin')),
	array('label'=>'Create GalleryType', 'url'=>array('create')),
	array('label'=>'View GalleryType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GalleryType', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>