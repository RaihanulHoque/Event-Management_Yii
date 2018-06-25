<?php
/* @var $this ArtistCategoryController */
/* @var $model ArtistCategory */

$this->breadcrumbs=array(
	'Artist Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArtistCategory', 'url'=>array('index')),
	array('label'=>'Create ArtistCategory', 'url'=>array('create')),
	array('label'=>'View ArtistCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArtistCategory', 'url'=>array('admin')),
);
?>

<h1>Update ArtistCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>