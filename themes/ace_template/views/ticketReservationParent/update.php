<?php
/* @var $this TicketReservationParentController */
/* @var $model TicketReservationParent */

$this->breadcrumbs=array(
	'Ticket Reservation Parents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TicketReservationParent', 'url'=>array('index')),
	array('label'=>'Create TicketReservationParent', 'url'=>array('create')),
	array('label'=>'View TicketReservationParent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TicketReservationParent', 'url'=>array('admin')),
);
?>

<h1>Update TicketReservationParent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>