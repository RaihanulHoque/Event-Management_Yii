<?php
/* @var $this EventCategoryController */
/* @var $model EventCategory */

$this->breadcrumbs=array(
	'Event Categories'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventCategory', 'url'=>array('index')),
	array('label'=>'Manage EventCategory', 'url'=>array('admin')),
);
?>

 
<?php $this->renderPartial('_form', array('model'=>$model)); ?>