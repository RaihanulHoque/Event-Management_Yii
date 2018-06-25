<?php
/* @var $this EventSocialLinkController */
/* @var $model EventSocialLink */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-social-link-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'event_id'); ?>
		<?php echo $form->textField($model,'event_id'); ?>
		<?php echo $form->error($model,'event_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'social_pack'); ?>
		<?php echo $form->textField($model,'social_pack'); ?>
		<?php echo $form->error($model,'social_pack'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_social_link'); ?>
		<?php echo $form->textArea($model,'event_social_link',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'event_social_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_social_pack_title'); ?>
		<?php echo $form->textField($model,'event_social_pack_title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'event_social_pack_title'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->