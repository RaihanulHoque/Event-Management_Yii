<?php
/* @var $this GalleryTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Types',
);

$this->menu=array(
	array('label'=>'Create GalleryType', 'url'=>array('create')),
	array('label'=>'Manage GalleryType', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
