<?php
/* @var $this TicketReservationController */
/* @var $model TicketReservation */

$this->breadcrumbs=array(
	'Ticket Reservations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TicketReservation', 'url'=>array('index')),
	array('label'=>'Create TicketReservation', 'url'=>array('create')),
	array('label'=>'Update TicketReservation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TicketReservation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TicketReservation', 'url'=>array('admin')),
);
?>

<h1>View TicketReservation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'gallery_seat_id',
	),
)); ?>
