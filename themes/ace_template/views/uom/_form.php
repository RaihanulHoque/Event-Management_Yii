<?php
/* @var $this UomController */
/* @var $model Uom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'uom-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'class' => ' form-horizontal',
        
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="modal-body">   
                <fieldset>
                     
                    <div class="form-group marginBot10px">
                        <?php echo $form->labelEx($model, 'formal_name', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
                        <div class="col-sm-9">
                             <?php echo $form->textField($model, 'formal_name', array('rows' => 2, 'span' => 5, 'maxlength' => 255, 'placeholder' => 'Formal Name')); ?>
                             <?php echo $form->error($model, 'formal_name'); ?>       
                        </div>
                    </div>  
                    <div class="form-group marginBot10px">
                        <?php echo $form->labelEx($model, 'full_name', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
                        <div class="col-sm-9">
                             <?php echo $form->textField($model, 'full_name', array('rows' => 2, 'span' => 5, 'maxlength' => 255, 'placeholder' => 'Full Name')); ?>
                             <?php echo $form->error($model, 'full_name'); ?>       
                        </div>
                    </div>  
                     
                     <div class="form-group marginBot10px">
                        <?php echo $form->labelEx($model, 'decimal_place', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
                        <div class="col-sm-9">
                             <?php echo $form->textField($model, 'decimal_place', array('rows' => 2, 'span' => 5, 'maxlength' => 255, 'placeholder' => 'Decimal Place')); ?>
                             <?php echo $form->error($model, 'decimal_place'); ?>       
                        </div>
                    </div> 
 
                </fieldset>
            </div>
            <div class="form-actions">
                <?php echo CHtml::resetButton(Yii::t('Common', 'reset'), array('class' => 'btn btn-warning customButton')); ?>
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-mini iframe customButton')); ?>
            </div>
            <?php $this->endWidget(); ?>

</div><!-- form -->