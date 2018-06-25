<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
 
<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Add User
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage All Users', array('admin'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Add User/Member</span> </h5>

				<div class="widget-toolbar">
					<a href="#" data-action="fullscreen" class="orange2">
						<i class="ace-icon fa fa-expand"></i>
					</a>

					<a href="#" data-action="reload">
						<i class="ace-icon fa fa-refresh"></i>
					</a>

					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>

					<a href="#" data-action="close">
						<i class="ace-icon fa fa-times"></i>
					</a>
				</div>
			</div>

			<div class="widget-body">
				<div class="widget-main form">
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'user-form',
						'enableAjaxValidation'=>false,
							'htmlOptions' => array(
								'enctype' => 'multipart/form-data',
								'class' => 'form-horizontal',
							), 

					)); ?>
					<p class="note">Fields with <span class="required">*</span> are required.</p> 

					<?php echo $form->errorSummary($model); ?> 	
					<?php echo $form->textField($model,'first_name',array('span'=>2,'class'=>'form-control marginBot10px marginBot10px', 'style'=>'width:32% !important; margin-right: 2%; float:left;', 'placeholder'=>'First Name')); ?>
					<?php echo $form->textField($model,'middle_name',array('span'=>2,'class'=>'form-control marginBot10px marginBot10px', 'style'=>'width:32% !important;margin-right: 2%; float:left;', 'placeholder'=>'Middle Name')); ?>
					<?php echo $form->textField($model,'last_name',array('span'=>2,'class'=>'form-control marginBot10px marginBot10px',  'style'=>'width:32% !important;','placeholder'=>'Last Name')); ?>

					<?php echo $form->textField($model,'username',array('span'=>5,'class'=>'form-control marginBot10px marginBot10px', 'placeholder'=>'Username')); ?>

					<?php echo $form->textField($model,'email',array('span'=>5,'class'=>'form-control marginBot10px', 'placeholder'=>'Email')); ?>

					<?php echo $form->passwordField($model,'password',array('span'=>5,'class'=>'form-control marginBot10px', 'placeholder'=>'Password')); ?>

					<?php //echo $form->textField($model,'group_id',array('span'=>5,'class'=>'form-control marginBot10px')); ?>

					 
					<div class="form-group marginBot10px">
						<?php echo $form->labelEx($model,'groupid', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
						<div class="col-sm-9">
						<?php echo $form->dropDownList($model, 'groupid', CHtml::listData(UserGroup::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => '--please select--', 'class' => 'span12 input-large', 'options' => array('38' => array('selected' => true)), 'label' => false)); ?>
							 <?php echo $form->error($model,'groupid'); ?>       
						</div>
					</div>					
					
					<div class="form-group marginBot10px">
						<?php echo $form->labelEx($model,'country', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
						<div class="col-sm-9">
						<?php echo $form->dropDownList($model, 'country', CHtml::listData(Country::model()->findAll(array('condition' => 'published=1', "order" => "country_name")), 'id', 'country_name'), array('empty' => '--please select--', 'class' => 'span12 input-large', 'options' => array('38' => array('selected' => true)), 'label' => false)); ?>
							 <?php echo $form->error($model,'country'); ?>       
						</div>
					</div>
					
					<div class="form-group marginBot10px">
						<?php echo $form->labelEx($model,'state', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
						<div class="col-sm-9">
						<?php echo $form->dropDownList($model, 'state', CHtml::listData(State::model()->findAll(array('condition' => 'published=1', "order" => "state_name")), 'id', 'state_name'), array('empty' => '--please select--', 'class' => 'span12 input-large', 'options' => array('38' => array('selected' => true)), 'label' => false)); ?>
							 <?php echo $form->error($model,'state'); ?>       
						</div>
					</div>
					 
					<div class="form-group marginBot10px">
						<?php echo $form->labelEx($model,'city', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
						<div class="col-sm-9">
							<?php echo $form->dropDownList($model, 'city', CHtml::listData(City::model()->findAll(array('condition' => 'published=1', "order" => "city_name")), 'id', 'city_name'), array('empty' => '--please select--', 'class' => 'span12 input-large', 'options' => array('38' => array('selected' => true)), 'label' => false)); ?>
							 <?php echo $form->error($model,'city'); ?>       
						</div>
					</div>
		  
					<div class="form-group marginBot10px">
						<?php echo $form->labelEx($model,'status', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
						<div class="col-sm-9">
							<?php echo $form->dropDownList($model, 'status', CHtml::listData(Status::model()->findAll(array('condition' => '', 'order' => 'title')), 'id', 'title'), array('class' => 'span5')); ?>
							 <?php echo $form->error($model,'status'); ?>       
						</div>
					</div>

					<?php echo $form->textField($model,'address',array('span'=>5,'class'=>'form-control marginBot10px', 'placeholder'=>'Address')); ?>

					<?php echo $form->textField($model,'phone',array('span'=>5,'class'=>'form-control marginBot10px', 'placeholder'=>'Phone')); ?>

					<?php echo $form->textField($model,'mobile',array('span'=>5,'class'=>'form-control marginBot10px', 'placeholder'=>'Mobile')); ?>

					<?php echo $form->fileField($model, 'profile_picture', array('placeholder'=>'Photo','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>

								
						<div class="form-actions">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-mini iframe', 'style' => 'margin-left: 12px; margin-top: 20px; padding: 6px 35px;')); ?>
						</div>
						<?php $this->endWidget(); ?>

				</div>
			</div>
		</div>
	</div>
</div>