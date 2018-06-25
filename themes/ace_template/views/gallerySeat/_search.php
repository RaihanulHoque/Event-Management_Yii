<?php
/* @var $this GallerySeatController */
/* @var $model GallerySeat */
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
		<?php echo $form->label($model,'seat_position_tracking'); ?>
		<?php echo $form->textField($model,'seat_position_tracking',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gallery_id'); ?>
		<?php echo $form->textField($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'row_id'); ?>
		<?php echo $form->textField($model,'row_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial_no'); ?>
		<?php echo $form->textField($model,'serial_no'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->