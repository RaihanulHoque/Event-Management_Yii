<?php
/* @var $this EventCelebratiesController */
/* @var $model EventCelebraties */

$this->breadcrumbs=array(
	'Event Celebraties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventCelebraties', 'url'=>array('index')),
	array('label'=>'Create EventCelebraties', 'url'=>array('create')),
	array('label'=>'View EventCelebraties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventCelebraties', 'url'=>array('admin')),
);
?>

<h1>Update EventCelebraties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>