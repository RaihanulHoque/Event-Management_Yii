<?php
/* @var $this SocialPageCategoryController */
/* @var $model SocialPageCategory */

$this->breadcrumbs=array(
	'Social Page Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SocialPageCategory', 'url'=>array('index')),
	array('label'=>'Manage SocialPageCategory', 'url'=>array('admin')),
);
?>

<h1>Create SocialPageCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>