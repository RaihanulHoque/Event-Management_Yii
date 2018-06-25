<?php
/* @var $this VoucherEventController */
/* @var $model VoucherEvent */

$this->breadcrumbs=array(
	'Voucher Events'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VoucherEvent', 'url'=>array('index')),
	array('label'=>'Create VoucherEvent', 'url'=>array('create')),
	array('label'=>'Update VoucherEvent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VoucherEvent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VoucherEvent', 'url'=>array('admin')),
);
?>

<h1>View VoucherEvent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'voucher_id',
		'status',
	),
)); ?>
