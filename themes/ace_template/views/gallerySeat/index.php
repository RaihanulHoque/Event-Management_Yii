<?php
/* @var $this GallerySeatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Seats',
);

$this->menu=array(
	array('label'=>'Create GallerySeat', 'url'=>array('create')),
	array('label'=>'Manage GallerySeat', 'url'=>array('admin')),
);
?>

<h1>Gallery Seats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
