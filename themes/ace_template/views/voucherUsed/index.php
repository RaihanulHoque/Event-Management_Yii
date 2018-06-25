<?php
/* @var $this VoucherUsedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Voucher Useds',
);

$this->menu=array(
	array('label'=>'Create VoucherUsed', 'url'=>array('create')),
	array('label'=>'Manage VoucherUsed', 'url'=>array('admin')),
);
?>

<h1>Voucher Useds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
