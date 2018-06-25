<?php
/* @var $this TicketCatOngalleryController */
/* @var $model TicketCatOngallery */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-cat-ongallery-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'event_ID'); ?>
		<?php echo $form->textField($model,'event_ID'); ?>
		<?php echo $form->error($model,'event_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gallery_id'); ?>
		<?php echo $form->textField($model,'gallery_id'); ?>
		<?php echo $form->error($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'row_id'); ?>
		<?php echo $form->textField($model,'row_id'); ?>
		<?php echo $form->error($model,'row_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->