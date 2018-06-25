<?php
/* @var $this GenTextCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gen Text Categories',
);

$this->menu=array(
	array('label'=>'Create GenTextCategory', 'url'=>array('create')),
	array('label'=>'Manage GenTextCategory', 'url'=>array('admin')),
);
?>

<h1>Gen Text Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
