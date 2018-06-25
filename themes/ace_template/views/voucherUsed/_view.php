<?php
/* @var $this VoucherUsedController */
/* @var $data VoucherUsed */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_voucher_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_voucher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_voucher_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_voucher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('used_on')); ?>:</b>
	<?php echo CHtml::encode($data->used_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />


</div>