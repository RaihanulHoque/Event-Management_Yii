<?php
/* @var $this GenTextController */
/* @var $model GenText */

$this->breadcrumbs=array(
	'Gen Texts'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GenText', 'url'=>array('index')),
	array('label'=>'Create GenText', 'url'=>array('create')),
	array('label'=>'View GenText', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GenText', 'url'=>array('admin')),
);
?>

<h1>Update GenText <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>