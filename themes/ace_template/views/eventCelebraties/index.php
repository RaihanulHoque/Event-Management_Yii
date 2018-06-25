<?php
/* @var $this EventCelebratiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Celebraties',
);

$this->menu=array(
	array('label'=>'Create EventCelebraties', 'url'=>array('create')),
	array('label'=>'Manage EventCelebraties', 'url'=>array('admin')),
);
?>

<h1>Event Celebraties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
