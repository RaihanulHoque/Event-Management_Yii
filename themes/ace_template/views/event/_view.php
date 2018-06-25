<?php
/* @var $this Event */
/* @var $data Event */
?>

<div class="view" style="width:200px; margin:10px; border:1px solid #eee; padding:10px; float:left;">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_category')); ?>:</b>
	<?php echo CHtml::encode($data->event_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('venue')); ?>:</b>
	<?php echo CHtml::encode($data->venue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('special_info')); ?>:</b>
	<?php echo CHtml::encode($data->special_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
	<?php echo CHtml::encode($data->details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_cover')); ?>:</b>
	<?php echo CHtml::encode($data->event_cover); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_thumb')); ?>:</b>
	<?php echo CHtml::encode($data->event_thumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_on')); ?>:</b>
	<?php echo CHtml::encode($data->modified_on); ?>
	<br />

	*/ ?>

</div>