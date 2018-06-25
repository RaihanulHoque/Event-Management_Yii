<?php
/* @var $this TicketCatOngalleryController */
/* @var $model TicketCatOngallery */

$this->breadcrumbs=array(
	'Ticket Cat Ongalleries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TicketCatOngallery', 'url'=>array('index')),
	array('label'=>'Create TicketCatOngallery', 'url'=>array('create')),
	array('label'=>'View TicketCatOngallery', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TicketCatOngallery', 'url'=>array('admin')),
);
?>

<h1>Update TicketCatOngallery <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>