<?php
/* @var $this GenTextCategoryController */
/* @var $model GenTextCategory */

$this->breadcrumbs=array(
	'Gen Text Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GenTextCategory', 'url'=>array('index')),
	array('label'=>'Manage GenTextCategory', 'url'=>array('admin')),
);
?>

<h1>Create GenTextCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>