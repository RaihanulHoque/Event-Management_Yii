<?php
/* @var $this LibraryController */
/* @var $model Library */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'library-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'library_type'); ?>
		<?php echo $form->textField($model,'library_type'); ?>
		<?php echo $form->error($model,'library_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artist_id'); ?>
		<?php echo $form->textField($model,'artist_id'); ?>
		<?php echo $form->error($model,'artist_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_link'); ?>
		<?php echo $form->textArea($model,'url_link',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'url_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'library_file'); ?>
		<?php echo $form->textField($model,'library_file',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'library_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'downloadable'); ?>
		<?php echo $form->textField($model,'downloadable'); ?>
		<?php echo $form->error($model,'downloadable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->