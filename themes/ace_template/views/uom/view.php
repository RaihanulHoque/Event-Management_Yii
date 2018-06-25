<?php
/* @var $this UomController */
/* @var $model Uom */

$this->breadcrumbs=array(
	'Uoms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Uom', 'url'=>array('index')),
	array('label'=>'Create Uom', 'url'=>array('create')),
	array('label'=>'Update Uom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Uom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Uom', 'url'=>array('admin')),
);
?>

<h1>View Uom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_id',
		'formal_name',
		'full_name',
		'decimal_place',
	),
)); ?>
