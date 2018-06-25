<?php
/* @var $this EventCelebratiesController */
/* @var $model EventCelebraties */

$this->breadcrumbs=array(
	'Event Celebraties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventCelebraties', 'url'=>array('index')),
	array('label'=>'Manage EventCelebraties', 'url'=>array('admin')),
);
?>

<h1>Create EventCelebraties</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>