<?php
/* @var $this UomController */
/* @var $model Uom */

$this->breadcrumbs=array(
	'Uoms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Uom', 'url'=>array('index')),
	array('label'=>'Manage Uom', 'url'=>array('admin')),
);
?>

<h1>Create Uom</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>