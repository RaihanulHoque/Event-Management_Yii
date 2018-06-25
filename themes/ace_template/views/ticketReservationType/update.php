<?php
/* @var $this TicketReservationTypeController */
/* @var $model TicketReservationType */

$this->breadcrumbs=array(
	'Ticket Reservation Types'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TicketReservationType', 'url'=>array('index')),
	array('label'=>'Create TicketReservationType', 'url'=>array('create')),
	array('label'=>'View TicketReservationType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TicketReservationType', 'url'=>array('admin')),
);
?>

<h1>Update TicketReservationType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>