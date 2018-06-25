<?php
/* @var $this TicketReservationController */
/* @var $data TicketReservation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallery_seat_id')); ?>:</b>
	<?php echo CHtml::encode($data->gallery_seat_id); ?>
	<br />


</div>