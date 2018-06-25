<?php
/* @var $this TicketCatOngalleryController */
/* @var $model TicketCatOngallery */
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
		<?php echo $form->label($model,'event_ID'); ?>
		<?php echo $form->textField($model,'event_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallery_id'); ?>
		<?php echo $form->textField($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'row_id'); ?>
		<?php echo $form->textField($model,'row_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->