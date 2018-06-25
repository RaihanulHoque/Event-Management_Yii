<?php
/* @var $this EventSocialLinkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Social Links',
);

$this->menu=array(
	array('label'=>'Create EventSocialLink', 'url'=>array('create')),
	array('label'=>'Manage EventSocialLink', 'url'=>array('admin')),
);
?>

<h1>Event Social Links</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
