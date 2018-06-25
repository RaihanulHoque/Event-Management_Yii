<?php
/* @var $this TicketReservationController */
/* @var $model TicketReservation */

$this->breadcrumbs=array(
	'Ticket Reservations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TicketReservation', 'url'=>array('index')),
	array('label'=>'Create TicketReservation', 'url'=>array('create')),
	array('label'=>'View TicketReservation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TicketReservation', 'url'=>array('admin')),
);
?>

<h1>Update TicketReservation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>