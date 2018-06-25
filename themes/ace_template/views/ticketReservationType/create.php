<?php
/* @var $this TicketReservationTypeController */
/* @var $model TicketReservationType */

$this->breadcrumbs=array(
	'Ticket Reservation Types'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TicketReservationType', 'url'=>array('index')),
	array('label'=>'Manage TicketReservationType', 'url'=>array('admin')),
);
?>

<h1>Create TicketReservationType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>