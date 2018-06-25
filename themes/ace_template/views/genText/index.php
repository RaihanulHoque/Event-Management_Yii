<?php
/* @var $this GenTextController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gen Texts',
);

$this->menu=array(
	array('label'=>'Create GenText', 'url'=>array('create')),
	array('label'=>'Manage GenText', 'url'=>array('admin')),
);
?>

<h1>Gen Texts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
