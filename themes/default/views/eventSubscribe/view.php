<?php
/* @var $this EventSubscribeController */
/* @var $model EventSubscribe */

$this->breadcrumbs=array(
	'Event Subscribes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List EventSubscribe', 'url'=>array('index')),
	array('label'=>'Create EventSubscribe', 'url'=>array('create')),
	array('label'=>'Update EventSubscribe', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventSubscribe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventSubscribe', 'url'=>array('admin')),
);
?>

<h1>View EventSubscribe #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'name',
		'email',
		'phone',
		'status',
	),
)); ?>
