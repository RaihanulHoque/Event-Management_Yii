<?php
/* @var $this VoucherUsedController */
/* @var $model VoucherUsed */

$this->breadcrumbs=array(
	'Voucher Useds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VoucherUsed', 'url'=>array('index')),
	array('label'=>'Create VoucherUsed', 'url'=>array('create')),
	array('label'=>'Update VoucherUsed', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VoucherUsed', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VoucherUsed', 'url'=>array('admin')),
);
?>

<h1>View VoucherUsed #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_voucher_id',
		'event_voucher_id',
		'used_on',
		'comment',
	),
)); ?>
