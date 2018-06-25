<?php
/* @var $this GalleryRowsController */
/* @var $model GalleryRows */
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
		<?php echo $form->label($model,'gallery_id'); ?>
		<?php echo $form->textField($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'row_title'); ?>
		<?php echo $form->textField($model,'row_title',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_of_seats'); ?>
		<?php echo $form->textField($model,'number_of_seats'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->