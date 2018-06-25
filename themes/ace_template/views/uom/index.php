<?php
/* @var $this UomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uoms',
);

$this->menu=array(
	array('label'=>'Create Uom', 'url'=>array('create')),
	array('label'=>'Manage Uom', 'url'=>array('admin')),
);
?>

<h1>Uoms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
