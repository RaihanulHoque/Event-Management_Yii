<?php
/* @var $this EventCelebratiesController */
/* @var $data EventCelebraties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artist_id')); ?>:</b>
	<?php echo CHtml::encode($data->artist_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icon_star')); ?>:</b>
	<?php echo CHtml::encode($data->icon_star); ?>
	<br />


</div>