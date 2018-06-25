<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gallery', 'url'=>array('admin')),
	array('label'=>'Create Gallery', 'url'=>array('create')),
	array('label'=>'View Gallery', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>

<h1>Update Gallery <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>