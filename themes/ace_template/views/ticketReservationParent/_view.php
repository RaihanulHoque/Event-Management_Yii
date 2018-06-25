<?php
/* @var $this TicketReservationParentController */
/* @var $data TicketReservationParent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reservation_type')); ?>:</b>
	<?php echo CHtml::encode($data->reservation_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_category')); ?>:</b>
	<?php echo CHtml::encode($data->ticket_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_of_ticket')); ?>:</b>
	<?php echo CHtml::encode($data->num_of_ticket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />


</div>