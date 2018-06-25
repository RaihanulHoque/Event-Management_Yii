<?php
/* @var $this VoucherUserController */
/* @var $model VoucherUser */

$this->breadcrumbs=array(
	'Voucher Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VoucherUser', 'url'=>array('index')),
	array('label'=>'Create VoucherUser', 'url'=>array('create')),
	array('label'=>'View VoucherUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VoucherUser', 'url'=>array('admin')),
);
?>

<h1>Update VoucherUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>