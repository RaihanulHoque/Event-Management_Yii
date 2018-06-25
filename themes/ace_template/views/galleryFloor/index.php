<?php
/* @var $this GalleryFloorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Floors',
);

$this->menu=array(
	array('label'=>'Create GalleryFloor', 'url'=>array('create')),
	array('label'=>'Manage GalleryFloor', 'url'=>array('admin')),
);
?>

<h1>Gallery Floors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
