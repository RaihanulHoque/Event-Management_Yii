<?php
/* @var $this TicketCatOngalleryController */
/* @var $model TicketCatOngallery */

$this->breadcrumbs=array(
	'Ticket Cat Ongalleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TicketCatOngallery', 'url'=>array('index')),
	array('label'=>'Manage TicketCatOngallery', 'url'=>array('admin')),
);
?>

<h1>Create TicketCatOngallery</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>