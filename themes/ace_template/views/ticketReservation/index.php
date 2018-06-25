<?php
/* @var $this TicketReservationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ticket Reservations',
);

$this->menu=array(
	array('label'=>'Create TicketReservation', 'url'=>array('create')),
	array('label'=>'Manage TicketReservation', 'url'=>array('admin')),
);
?>

<h1>Ticket Reservations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
