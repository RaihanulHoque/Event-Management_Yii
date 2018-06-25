<?php
/* @var $this GalleryFloorController */
/* @var $model GalleryFloor */

$this->breadcrumbs=array(
	'Gallery Floors'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryFloor', 'url'=>array('index')),
	array('label'=>'Manage GalleryFloor', 'url'=>array('admin')),
);

?>

 
<?php $this->renderPartial('_form', array('model'=>$model)); ?>