<?php
/* @var $this TicketReservationController */
/* @var $model TicketReservation */

$this->breadcrumbs=array(
	'Ticket Reservations'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TicketReservation', 'url'=>array('index')),
	array('label'=>'Manage TicketReservation', 'url'=>array('admin')),
);
?>

<h1>Create TicketReservation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>