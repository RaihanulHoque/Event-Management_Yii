<?php
/* @var $this LibraryTypeController */
/* @var $model LibraryType */

$this->breadcrumbs=array(
	'Library Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LibraryType', 'url'=>array('index')),
	array('label'=>'Create LibraryType', 'url'=>array('create')),
	array('label'=>'View LibraryType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LibraryType', 'url'=>array('admin')),
);
?>

<h1>Update LibraryType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>