<?php
/* @var $this BannerStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Banner Statuses',
);

$this->menu=array(
	array('label'=>'Create BannerStatus', 'url'=>array('create')),
	array('label'=>'Manage BannerStatus', 'url'=>array('admin')),
);
?>

<h1>Banner Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
