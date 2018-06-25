<?php
/* @var $this VoucherUsedController */
/* @var $model VoucherUsed */

$this->breadcrumbs=array(
	'Voucher Useds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VoucherUsed', 'url'=>array('index')),
	array('label'=>'Create VoucherUsed', 'url'=>array('create')),
	array('label'=>'View VoucherUsed', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VoucherUsed', 'url'=>array('admin')),
);
?>

<h1>Update VoucherUsed <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>