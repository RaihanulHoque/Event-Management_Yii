<?php
/* @var $this GalleryRowsController */
/* @var $model GalleryRows */

$this->breadcrumbs=array(
	'Gallery Rows'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryRows', 'url'=>array('index')),
	array('label'=>'Create GalleryRows', 'url'=>array('create')),
	array('label'=>'View GalleryRows', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GalleryRows', 'url'=>array('admin')),
);
?>

<h1>Update GalleryRows <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>