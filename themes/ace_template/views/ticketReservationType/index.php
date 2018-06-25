<?php
/* @var $this TicketReservationTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ticket Reservation Types',
);

$this->menu=array(
	array('label'=>'Create TicketReservationType', 'url'=>array('create')),
	array('label'=>'Manage TicketReservationType', 'url'=>array('admin')),
);
?>

<h1>Ticket Reservation Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
