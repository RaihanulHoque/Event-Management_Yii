<?php
/* @var $this ArtistCategoryController */
/* @var $model ArtistCategory */

$this->breadcrumbs=array(
	'Artist Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArtistCategory', 'url'=>array('index')),
	array('label'=>'Manage ArtistCategory', 'url'=>array('admin')),
);
?>

<h1>Create ArtistCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>