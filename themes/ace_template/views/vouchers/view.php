<?php
/* @var $this VouchersController */
/* @var $model Vouchers */

$this->breadcrumbs=array(
	'Vouchers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Vouchers', 'url'=>array('index')),
	array('label'=>'Create Vouchers', 'url'=>array('create')),
	array('label'=>'Update Vouchers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vouchers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vouchers', 'url'=>array('admin')),
);
?>

<h1>View Vouchers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'name',
		'description',
		'uses',
		'max_uses',
		'max_uses_user',
		'type',
		'discount_percent',
		'is_fixed',
		'starts_at',
		'expires_at',
		'status',
		'created_by',
		'created_on',
		'updated_by',
		'updated_on',
	),
)); ?>
