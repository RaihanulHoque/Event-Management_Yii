<?php
/* @var $this VoucherEventController */
/* @var $model VoucherEvent */

$this->breadcrumbs=array(
	'Voucher Events'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VoucherEvent', 'url'=>array('index')),
	array('label'=>'Create VoucherEvent', 'url'=>array('create')),
	array('label'=>'View VoucherEvent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VoucherEvent', 'url'=>array('admin')),
);
?>

<h1>Update VoucherEvent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>