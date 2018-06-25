<?php
/* @var $this GenTextController */
/* @var $model GenText */

$this->breadcrumbs=array(
	'Gen Texts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GenText', 'url'=>array('index')),
	array('label'=>'Create GenText', 'url'=>array('create')),
	array('label'=>'Update GenText', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GenText', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GenText', 'url'=>array('admin')),
);
?>

<h1>View GenText #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'title',
		'detail',
		'status',
	),
)); ?>
