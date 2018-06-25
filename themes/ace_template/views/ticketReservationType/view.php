<?php
/* @var $this TicketReservationTypeController */
/* @var $model TicketReservationType */

$this->breadcrumbs=array(
	'Ticket Reservation Types'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TicketReservationType', 'url'=>array('index')),
	array('label'=>'Create TicketReservationType', 'url'=>array('create')),
	array('label'=>'Update TicketReservationType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TicketReservationType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TicketReservationType', 'url'=>array('admin')),
);
?>

<h1>View TicketReservationType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'reservation_type',
	),
)); ?>
