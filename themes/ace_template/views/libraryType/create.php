<?php
/* @var $this LibraryTypeController */
/* @var $model LibraryType */

$this->breadcrumbs=array(
	'Library Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LibraryType', 'url'=>array('index')),
	array('label'=>'Manage LibraryType', 'url'=>array('admin')),
);
?>

<h1>Create LibraryType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>