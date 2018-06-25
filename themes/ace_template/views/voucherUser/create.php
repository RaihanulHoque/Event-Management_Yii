<?php
/* @var $this VoucherUserController */
/* @var $model VoucherUser */

$this->breadcrumbs=array(
	'Voucher Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VoucherUser', 'url'=>array('index')),
	array('label'=>'Manage VoucherUser', 'url'=>array('admin')),
);
?>

<h1>Create VoucherUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>