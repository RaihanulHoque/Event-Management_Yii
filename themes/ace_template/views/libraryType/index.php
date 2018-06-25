<?php
/* @var $this LibraryTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Library Types',
);

$this->menu=array(
	array('label'=>'Create LibraryType', 'url'=>array('create')),
	array('label'=>'Manage LibraryType', 'url'=>array('admin')),
);
?>

<h1>Library Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
