<?php
/* @var $this ArtistCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Artist Categories',
);

$this->menu=array(
	array('label'=>'Create ArtistCategory', 'url'=>array('create')),
	array('label'=>'Manage ArtistCategory', 'url'=>array('admin')),
);
?>

<h1>Artist Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
