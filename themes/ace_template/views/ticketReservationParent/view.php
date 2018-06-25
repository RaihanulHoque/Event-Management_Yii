<?php
/* @var $this TicketReservationParentController */
/* @var $model TicketReservationParent */

$this->breadcrumbs=array(
	'Ticket Reservation Parents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TicketReservationParent', 'url'=>array('index')),
	array('label'=>'Create TicketReservationParent', 'url'=>array('create')),
	array('label'=>'Update TicketReservationParent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TicketReservationParent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TicketReservationParent', 'url'=>array('admin')),
);
?>

<h1>View TicketReservationParent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'reservation_type',
		'ticket_category',
		'user_id',
		'num_of_ticket',
		'created_on',
	),
)); ?>
