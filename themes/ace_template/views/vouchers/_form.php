<?php
/* @var $this VouchersController */
/* @var $model Vouchers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vouchers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code'); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uses'); ?>
		<?php echo $form->textField($model,'uses'); ?>
		<?php echo $form->error($model,'uses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_uses'); ?>
		<?php echo $form->textField($model,'max_uses'); ?>
		<?php echo $form->error($model,'max_uses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_uses_user'); ?>
		<?php echo $form->textField($model,'max_uses_user'); ?>
		<?php echo $form->error($model,'max_uses_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount_percent'); ?>
		<?php echo $form->textField($model,'discount_percent'); ?>
		<?php echo $form->error($model,'discount_percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_fixed'); ?>
		<?php echo $form->textField($model,'is_fixed'); ?>
		<?php echo $form->error($model,'is_fixed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'starts_at'); ?>
		<?php echo $form->textField($model,'starts_at'); ?>
		<?php echo $form->error($model,'starts_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expires_at'); ?>
		<?php echo $form->textField($model,'expires_at'); ?>
		<?php echo $form->error($model,'expires_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
		<?php echo $form->error($model,'updated_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->