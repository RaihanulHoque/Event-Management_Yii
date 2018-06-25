<?php
/* @var $this EventSubscribeController */
/* @var $model EventSubscribe */

$this->breadcrumbs=array(
	'Event Subscribes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventSubscribe', 'url'=>array('index')),
	array('label'=>'Create EventSubscribe', 'url'=>array('create')),
	array('label'=>'View EventSubscribe', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventSubscribe', 'url'=>array('admin')),
);
?>

<h1>Update EventSubscribe <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>