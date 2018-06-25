<?php
/* @var $this EventCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Categories',
);

$this->menu=array(
	array('label'=>'Create EventCategory', 'url'=>array('create')),
	array('label'=>'Manage EventCategory', 'url'=>array('admin')),
);
?>

<h1>Event Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
