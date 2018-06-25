<?php
/* @var $this UomController */
/* @var $model Uom */

$this->breadcrumbs=array(
	'Uoms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Uom', 'url'=>array('index')),
	array('label'=>'Create Uom', 'url'=>array('create')),
	array('label'=>'View Uom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Uom', 'url'=>array('admin')),
);
?>

<h1>Update Uom <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>