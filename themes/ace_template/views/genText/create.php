<?php
/* @var $this GenTextController */
/* @var $model GenText */

$this->breadcrumbs=array(
	'Gen Texts'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GenText', 'url'=>array('index')),
	array('label'=>'Manage GenText', 'url'=>array('admin')),
);
?>

 
<?php $this->renderPartial('_form', array('model'=>$model)); ?>