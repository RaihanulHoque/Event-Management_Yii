<?php
/* @var $this SocialPageCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Social Page Categories',
);

$this->menu=array(
	array('label'=>'Create SocialPageCategory', 'url'=>array('create')),
	array('label'=>'Manage SocialPageCategory', 'url'=>array('admin')),
);
?>

<h1>Social Page Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
