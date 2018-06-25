<?php
/* @var $this GenTextCategoryController */
/* @var $model GenTextCategory */

$this->breadcrumbs=array(
	'Gen Text Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GenTextCategory', 'url'=>array('index')),
	array('label'=>'Create GenTextCategory', 'url'=>array('create')),
	array('label'=>'View GenTextCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GenTextCategory', 'url'=>array('admin')),
);
?>

<h1>Update GenTextCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>