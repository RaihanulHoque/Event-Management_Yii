<?php
/* @var $this GenTextController */
/* @var $model GenText */

$this->breadcrumbs=array(
	'Gen Texts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GenText', 'url'=>array('index')),
	array('label'=>'Manage GenText', 'url'=>array('admin')),
);
?>

<h1>Create GenText</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>