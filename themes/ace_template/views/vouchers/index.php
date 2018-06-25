<?php
/* @var $this VouchersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vouchers',
);

$this->menu=array(
	array('label'=>'Create Vouchers', 'url'=>array('create')),
	array('label'=>'Manage Vouchers', 'url'=>array('admin')),
);
?>

<h1>Vouchers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
