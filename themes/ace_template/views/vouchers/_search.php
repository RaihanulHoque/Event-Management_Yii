<?php
/* @var $this VouchersController */
/* @var $model Vouchers */
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
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uses'); ?>
		<?php echo $form->textField($model,'uses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_uses'); ?>
		<?php echo $form->textField($model,'max_uses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_uses_user'); ?>
		<?php echo $form->textField($model,'max_uses_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discount_percent'); ?>
		<?php echo $form->textField($model,'discount_percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_fixed'); ?>
		<?php echo $form->textField($model,'is_fixed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'starts_at'); ?>
		<?php echo $form->textField($model,'starts_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expires_at'); ?>
		<?php echo $form->textField($model,'expires_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->