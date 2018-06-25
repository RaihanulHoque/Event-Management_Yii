<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gallery', 'url'=>array('admin')),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>

 
<?php $this->renderPartial('_form', array('model'=>$model)); ?>