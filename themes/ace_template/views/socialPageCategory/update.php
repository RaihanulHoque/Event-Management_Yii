<?php
/* @var $this SocialPageCategoryController */
/* @var $model SocialPageCategory */

$this->breadcrumbs=array(
	'Social Page Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SocialPageCategory', 'url'=>array('index')),
	array('label'=>'Create SocialPageCategory', 'url'=>array('create')),
	array('label'=>'View SocialPageCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SocialPageCategory', 'url'=>array('admin')),
);
?>

<h1>Update SocialPageCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>