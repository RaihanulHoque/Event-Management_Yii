<?php
/* @var $this GalleryRowsController */
/* @var $model GalleryRows */

$this->breadcrumbs=array(
	'Gallery Rows'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryRows', 'url'=>array('index')),
	array('label'=>'Manage GalleryRows', 'url'=>array('admin')),
);
//Start For chained dropdown menu //
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.chained.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScript('chain-select', " 
    $('#GalleryRows_floor_name').chained('#GalleryRows_gallery_id');
    ");
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>