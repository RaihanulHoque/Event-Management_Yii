<?php
/* @var $this NewsLetterController */
/* @var $model NewsLetter */

$this->breadcrumbs=array(
	'News Letters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewsLetter', 'url'=>array('index')),
	array('label'=>'Create NewsLetter', 'url'=>array('create')),
	array('label'=>'View NewsLetter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewsLetter', 'url'=>array('admin')),
);
?>

<h1>Update NewsLetter <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>