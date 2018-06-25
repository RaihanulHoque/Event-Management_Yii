<div class="form">
 
<?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'chnage-password-form',
            'enableClientValidation' => true,
            'htmlOptions' => array('class' => 'well'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
                'class' => 'form-horizontal',
            ),
     ));
?>
 <?php /*
  <div class="row"> <?php echo $form->labelEx($model,'old_password'); ?> <?php echo $form->passwordField($model,'old_password'); ?> <?php echo $form->error($model,'old_password'); ?> </div>
 */ ?>
 <div class="form-group marginBot10px">
      <?php echo $form->labelEx($model,'password', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
      <div class="col-sm-9">
           <?php echo $form->passwordField($model, 'password', array('rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
           <?php echo $form->error($model,'password'); ?>       
      </div>
  </div> 
 
 
 <div class="form-group marginBot10px">
      <?php echo $form->labelEx($model,'verifyPassword', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
      <div class="col-sm-9">
           <?php echo $form->passwordField($model, 'verifyPassword', array('rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
           <?php echo $form->error($model,'verifyPassword'); ?>       
      </div>
  </div> 
 
   <div class="form-actions">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'changepassword' : 'Change Password', array('class' => 'btn btn-primary btn-mini iframe', 'style' => 'margin-left: 12px; margin-top: 20px; padding: 6px 35px;')); ?>
</div>
<?php $this->endWidget(); ?>
 </div>