<?php
/* @var $this EventSocialLinkController */
/* @var $model EventSocialLink */

$this->breadcrumbs=array(
	'Event Social Links'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventSocialLink', 'url'=>array('index')),
	array('label'=>'Create EventSocialLink', 'url'=>array('create')),
	array('label'=>'View EventSocialLink', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventSocialLink', 'url'=>array('admin')),
);
?>

<h1>Update EventSocialLink <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>