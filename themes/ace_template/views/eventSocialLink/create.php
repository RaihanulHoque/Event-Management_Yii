<?php
/* @var $this EventSocialLinkController */
/* @var $model EventSocialLink */

$this->breadcrumbs=array(
	'Event Social Links'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventSocialLink', 'url'=>array('index')),
	array('label'=>'Manage EventSocialLink', 'url'=>array('admin')),
);
?>

<h1>Create EventSocialLink</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>