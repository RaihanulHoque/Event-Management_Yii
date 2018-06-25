<?php
/* @var $this NewsLetterController */
/* @var $model NewsLetter */

$this->breadcrumbs=array(
	'News Letters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewsLetter', 'url'=>array('index')),
	array('label'=>'Manage NewsLetter', 'url'=>array('admin')),
);
?>

<h1>Create NewsLetter</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>