<?php
/* @var $this VoucherUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Voucher Users',
);

$this->menu=array(
	array('label'=>'Create VoucherUser', 'url'=>array('create')),
	array('label'=>'Manage VoucherUser', 'url'=>array('admin')),
);
?>

<h1>Voucher Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
