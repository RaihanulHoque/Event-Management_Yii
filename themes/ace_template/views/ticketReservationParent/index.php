<?php
/* @var $this TicketReservationParentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ticket Reservation Parents',
);

$this->menu=array(
	array('label'=>'Create TicketReservationParent', 'url'=>array('create')),
	array('label'=>'Manage TicketReservationParent', 'url'=>array('admin')),
);
?>

<h1>Ticket Reservation Parents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
