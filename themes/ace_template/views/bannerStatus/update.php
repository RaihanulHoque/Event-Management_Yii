<?php
/* @var $this BannerStatusController */
/* @var $model BannerStatus */

$this->breadcrumbs=array(
	'Banner Statuses'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BannerStatus', 'url'=>array('index')),
	array('label'=>'Create BannerStatus', 'url'=>array('create')),
	array('label'=>'View BannerStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BannerStatus', 'url'=>array('admin')),
);
?>

<h1>Update BannerStatus <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>