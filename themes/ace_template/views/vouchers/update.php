<?php
/* @var $this VouchersController */
/* @var $model Vouchers */

$this->breadcrumbs=array(
	'Vouchers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vouchers', 'url'=>array('index')),
	array('label'=>'Create Vouchers', 'url'=>array('create')),
	array('label'=>'View Vouchers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vouchers', 'url'=>array('admin')),
);
?>

<h1>Update Vouchers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>