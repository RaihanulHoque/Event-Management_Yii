<?php
/* @var $this EventCategoryController */
/* @var $model EventCategory */

$this->breadcrumbs=array(
	'Event Categories'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventCategory', 'url'=>array('index')),
	array('label'=>'Create EventCategory', 'url'=>array('create')),
	array('label'=>'View EventCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventCategory', 'url'=>array('admin')),
);
?>

<h1>Update EventCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>