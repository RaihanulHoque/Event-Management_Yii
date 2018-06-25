<?php
/* @var $this NewsLetterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News Letters',
);

$this->menu=array(
	array('label'=>'Create NewsLetter', 'url'=>array('create')),
	array('label'=>'Manage NewsLetter', 'url'=>array('admin')),
);
?>

<h1>News Letters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
