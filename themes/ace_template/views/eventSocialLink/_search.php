<?php
/* @var $this EventSocialLinkController */
/* @var $model EventSocialLink */
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
		<?php echo $form->label($model,'event_id'); ?>
		<?php echo $form->textField($model,'event_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'social_pack'); ?>
		<?php echo $form->textField($model,'social_pack'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'event_social_link'); ?>
		<?php echo $form->textArea($model,'event_social_link',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'event_social_pack_title'); ?>
		<?php echo $form->textField($model,'event_social_pack_title',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->