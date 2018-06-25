<?php
/* @var $this EventSubscribeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Subscribes',
);

$this->menu=array(
	array('label'=>'Create EventSubscribe', 'url'=>array('create')),
	array('label'=>'Manage EventSubscribe', 'url'=>array('admin')),
);
?>

<h1>Event Subscribes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
