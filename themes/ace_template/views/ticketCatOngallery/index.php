<?php
/* @var $this TicketCatOngalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ticket Cat Ongalleries',
);

$this->menu=array(
	array('label'=>'Create TicketCatOngallery', 'url'=>array('create')),
	array('label'=>'Manage TicketCatOngallery', 'url'=>array('admin')),
);
?>

<h1>Ticket Cat Ongalleries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'admin',
)); ?>
