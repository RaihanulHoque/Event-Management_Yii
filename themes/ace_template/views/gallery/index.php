<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galleries',
);

$this->menu=array(
	array('label'=>'Create Gallery', 'url'=>array('create')),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>

 
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
