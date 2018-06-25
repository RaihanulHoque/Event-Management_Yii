<?php
/* @var $this GenTextCategoryController */
/* @var $model GenTextCategory */

$this->breadcrumbs=array(
	'Gen Text Categories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GenTextCategory', 'url'=>array('index')),
	array('label'=>'Create GenTextCategory', 'url'=>array('create')),
	array('label'=>'Update GenTextCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GenTextCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GenTextCategory', 'url'=>array('admin')),
);
?>

<h1>View GenTextCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'status',
	),
)); ?>
