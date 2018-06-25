<?php
/* @var $this GalleryTypeController */
/* @var $model GalleryType */

$this->breadcrumbs=array(
	'Gallery Types'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryType', 'url'=>array('index')),
	array('label'=>'Manage GalleryType', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>