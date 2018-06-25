<?php
/* @var $this VoucherUsedController */
/* @var $model VoucherUsed */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_voucher_id'); ?>
		<?php echo $form->textField($model,'user_voucher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'event_voucher_id'); ?>
		<?php echo $form->textField($model,'event_voucher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'used_on'); ?>
		<?php echo $form->textField($model,'used_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->