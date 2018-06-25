<?php
/* @var $this GalleryRowsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Rows',
);

$this->menu=array(
	array('label'=>'Create GalleryRows', 'url'=>array('create')),
	array('label'=>'Manage GalleryRows', 'url'=>array('admin')),
);
?>

<h1>Gallery Rows</h1>

<?php $this->redirect(array('admin')); ?>
