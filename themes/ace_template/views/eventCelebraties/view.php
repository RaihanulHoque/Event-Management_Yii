<?php
/* @var $this EventCelebratiesController */
/* @var $model EventCelebraties */

$this->breadcrumbs=array(
	'Event Celebraties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EventCelebraties', 'url'=>array('index')),
	array('label'=>'Create EventCelebraties', 'url'=>array('create')),
	array('label'=>'Update EventCelebraties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventCelebraties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventCelebraties', 'url'=>array('admin')),
);
?>

<h1>View EventCelebraties #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'artist_id',
		'icon_star',
	),
)); ?>
