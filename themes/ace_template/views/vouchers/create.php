<?php
/* @var $this VouchersController */
/* @var $model Vouchers */

$this->breadcrumbs=array(
	'Vouchers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vouchers', 'url'=>array('index')),
	array('label'=>'Manage Vouchers', 'url'=>array('admin')),
);
?>

<h1>Create Vouchers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>