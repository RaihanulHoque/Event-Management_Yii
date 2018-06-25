<?php
/* @var $this VoucherUsedController */
/* @var $model VoucherUsed */

$this->breadcrumbs=array(
	'Voucher Useds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VoucherUsed', 'url'=>array('index')),
	array('label'=>'Manage VoucherUsed', 'url'=>array('admin')),
);
?>

<h1>Create VoucherUsed</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>