<?php
/* @var $this EventSubscribeController */
/* @var $model EventSubscribe */

$this->breadcrumbs=array(
	'Event Subscribes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventSubscribe', 'url'=>array('index')),
	array('label'=>'Manage EventSubscribe', 'url'=>array('admin')),
);
?>

<h1>Create EventSubscribe</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>