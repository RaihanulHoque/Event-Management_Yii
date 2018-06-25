<?php
/* @var $this TicketReservationParentController */
/* @var $model TicketReservationParent */

$this->breadcrumbs=array(
	'Ticket Reservation Parents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TicketReservationParent', 'url'=>array('index')),
	array('label'=>'Manage TicketReservationParent', 'url'=>array('admin')),
);
?>

<h1>Create TicketReservationParent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>