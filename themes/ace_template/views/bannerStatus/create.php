<?php
/* @var $this BannerStatusController */
/* @var $model BannerStatus */

$this->breadcrumbs=array(
	'Banner Statuses'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BannerStatus', 'url'=>array('index')),
	array('label'=>'Manage BannerStatus', 'url'=>array('admin')),
);
?>

<h1>Create BannerStatus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>