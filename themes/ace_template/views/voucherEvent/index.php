<?php
/* @var $this VoucherEventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Voucher Events',
);

$this->menu=array(
	array('label'=>'Create VoucherEvent', 'url'=>array('create')),
	array('label'=>'Manage VoucherEvent', 'url'=>array('admin')),
);
?>

<h1>Voucher Events</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
