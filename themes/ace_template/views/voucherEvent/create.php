<?php
/* @var $this VoucherEventController */
/* @var $model VoucherEvent */

$this->breadcrumbs=array(
	'Voucher Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VoucherEvent', 'url'=>array('index')),
	array('label'=>'Manage VoucherEvent', 'url'=>array('admin')),
);
?>

<h1>Create VoucherEvent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>