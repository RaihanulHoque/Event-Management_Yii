<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
  
 <div id="shop">
	<!-- PAGE TITLE -->
		<header id="page-title">
			<div class="container">
				<h1><?php echo "Registration";//$model->title; ?></h1>
				<?php 
					echo'
					<ul class="breadcrumb">
						<li>'.CHtml::link('Home', array('/site/index'), array("class"=>"")).'</li>
						<li class="active">Registration</li>
					</ul>';

				?>
			</div>
		</header>
	<section class="container">

		<div class="row" style="margin: 0 auto; text-align:left;">
			<!-- CONTACT -->
			<div class="col-md-12">
				 
				<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'user-form',
						'enableAjaxValidation'=>false,
							'htmlOptions' => array(
								'enctype' => 'multipart/form-data',
								'class' => 'form-horizontal',
							), 

					)); ?>								

					<div class="row">
						<div class="form-group">
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'first_name'); ?>
								<?php echo $form->textField($model,'first_name', array('data-msg-required'=>'Enter your first name.', 'class'=>'form-control')); ?>
							</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'middle_name'); ?>
								<?php echo $form->textField($model,'middle_name', array('data-msg-required'=>'Enter your middle name.', 'class'=>'form-control')); ?>
							</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'last_name'); ?>
								<?php echo $form->textField($model,'last_name', array('data-msg-required'=>'Enter your last name.', 'class'=>'form-control')); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'email'); ?>
								<?php echo $form->textField($model,'email', array('data-msg-required'=>'Enter your email address.', 'data-msg-email'=>'Please enter a valid email address.', 'maxlength'=>'100', 'class'=>'form-control')); ?>
							</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'username'); ?>
								<?php echo $form->textField($model,'username', array('data-msg-required'=>'Enter your username.', 'class'=>'form-control')); ?>
							</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'password'); ?>
								<?php echo $form->passwordField($model,'password', array('data-msg-required'=>'Please enter your last name.', 'class'=>'form-control')); ?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
 								<div class="col-md-4">
								<?php echo $form->labelEx($model,'country', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
								<?php echo $form->dropDownList($model, 'country', CHtml::listData(Country::model()->findAll(array('condition' => 'published=1', "order" => "country_name")), 'id', 'country_name'), array('empty' => '--please select--', 'class' => 'span12 input-large', 'options' => array('38' => array('selected' => true)), 'label' => false)); ?>
 								</div>
								<div class="col-sm-4">
									<?php echo $form->labelEx($model,'state', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
									<?php echo $form->dropDownList($model, 'state', CHtml::listData(State::model()->findAll(array('condition' => 'published=1', "order" => "state_name")), 'id', 'state_name'), array('empty' => '--please select--', 'class' => 'span12 input-large', 'options' => array('38' => array('selected' => true)), 'label' => false)); ?>
									 <?php echo $form->error($model,'state'); ?>       
								</div>
								<div class="col-sm-4">
									<?php echo $form->labelEx($model,'city', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
									<?php echo $form->dropDownList($model, 'city', CHtml::listData(City::model()->findAll(array('condition' => 'published=1', "order" => "city_name")), 'id', 'city_name'), array('empty' => '--please select--', 'class' => 'span12 input-large', 'options' => array('38' => array('selected' => true)), 'label' => false)); ?>
									 <?php echo $form->error($model,'city'); ?>       
								</div>
						</div>
					</div>					

					<div class="row">
						<div class="form-group">
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'phone'); ?>
								<?php echo $form->textField($model,'phone', array('data-msg-required'=>'Enter your phone number.', 'class'=>'form-control')); ?>
							</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'mobile'); ?>
								<?php echo $form->textField($model,'mobile', array('data-msg-required'=>'Please enter mobile number.', 'class'=>'form-control')); ?>
							</div>
						</div>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'address'); ?>
						<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50, 'maxlength'=>5000, 'data-msg-required'=>'Please enter address.', 'class'=>'form-control')); ?>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'profile_picture'); ?>
						<?php echo $form->fileField($model, 'profile_picture', array('placeholder'=>'Photo','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
					</div>
					<div class="row submit">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Register' : 'Save', array('class' => 'btn btn-primary btn-mini iframe', 'style' => 'margin-left: 12px; margin-top: 20px; padding: 6px 35px;')); ?>
					</div>

				<?php $this->endWidget(); ?>

				</div><!-- form -->

 			</div>	
		</div>
	</section>
</div>