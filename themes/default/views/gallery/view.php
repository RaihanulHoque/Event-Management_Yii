<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Gallery', 'url'=>array('index')),
	array('label'=>'Create Gallery', 'url'=>array('create')),
	array('label'=>'Update Gallery', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Gallery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>

<h1>View Gallery #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'gallery_type',
		'number_of_floor',
		'address',
		'location_map',
		'photo',
		'image_rename',
		'created_by',
		'created_on',
		'updated_by',
		'updated_on',
		'total_capacity',
	),
)); ?>
