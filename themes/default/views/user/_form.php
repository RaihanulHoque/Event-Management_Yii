<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activation'); ?>
		<?php echo $form->textField($model,'activation',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'activation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime'); ?>
		<?php echo $form->error($model,'createtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registerDate'); ?>
		<?php echo $form->textField($model,'registerDate'); ?>
		<?php echo $form->error($model,'registerDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastvisit'); ?>
		<?php echo $form->textField($model,'lastvisit'); ?>
		<?php echo $form->error($model,'lastvisit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastvisitDate'); ?>
		<?php echo $form->textField($model,'lastvisitDate'); ?>
		<?php echo $form->error($model,'lastvisitDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'superuser'); ?>
		<?php echo $form->textField($model,'superuser'); ?>
		<?php echo $form->error($model,'superuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groupid'); ?>
		<?php echo $form->textField($model,'groupid'); ?>
		<?php echo $form->error($model,'groupid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type'); ?>
		<?php echo $form->error($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_id'); ?>
		<?php echo $form->textField($model,'reference_id'); ?>
		<?php echo $form->error($model,'reference_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profile_picture'); ?>
		<?php echo $form->textField($model,'profile_picture',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'profile_picture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_rename'); ?>
		<?php echo $form->textField($model,'image_rename',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'image_rename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company'); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

			<div id="shop">

				<!-- PAGE TITLE -->
				<header id="page-title">
					<div class="container">
						<h1>Sign In</h1>

						<ul class="breadcrumb">
							<li><a href="index-2.html">Home</a></li>
							<li class="active">Sign In</li>
						</ul>
					</div>
				</header>


				<section class="container">

					<div class="row" style="margin: 0 auto; text-align:left;">

						<!-- LOGIN -->
						<div class="col-md-6">

							<h2>Sign <strong>In</strong></h2>
															<!-- alert failed -->
							
							
							<div class="form" style="margin-bottom:20px;">
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'login-form',
								//'class'=>'',
								'enableAjaxValidation'=>true,
							)); ?>
							
								
								<div class="alert alert-danger">
								
								<?php echo '<i class="fa fa-frown-o"></i> '. $form->error($model,'username', array('class'=>'')); ?>	
								</div>	
								<p class="note">Fields with <span class="required">*</span> are required.</p>
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<?php echo $form->labelEx($model,'Username'); ?>
											<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
											<?php //echo $form->textField($model, 'sample_quantity', array('maxlength' => 20, 'class' => 'col-sm-4', 'placeholder' => 'Sample Quantity')); ?>
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<?php echo $form->labelEx($model,'password'); ?>
											<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
											<?php //echo $form->error($model,'password'); ?>
										</div>
									</div>
								</div>
								<?php /*
								<div class="row rememberMe">
									<?php echo $form->checkBox($model,'rememberMe'); ?>
									<?php echo $form->label($model,'rememberMe'); ?>
									<?php echo $form->error($model,'rememberMe'); ?>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<span class="remember-box checkbox">
											<label for="rememberme">
												<input type="checkbox" id="rememberme" name="rememberme">Remember Me
											</label>
										</span>
									</div>
								</div>
								*/ ?>
								<div class="row">
									<div class="col-md-6">
										<?php //echo CHtml::link('<span class="btn-label"><i class="fa fa-plus"></i></span>' . Yii::t('Common', 'Login'), array('event/checkout', 'uid'=>$user_id, 'sn'=>$session), array('class' => 'btn btn-labeled btn-primary')); ?>
										<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary',  'data-loading-text'=>'Loading...')); ?>
									</div>
								</div>
								 

							<?php $this->endWidget(); ?>
							</div><!-- form -->
							<p class="white-row">
								Don't have an account yet? 
								 <?php echo CHtml::link(Yii::t('Common', 'Click here to REGISTER an account'), array('user/create', ), array('class' => 'btn-labeled')); ?>, it's free!
							</p>
						</div>
						 
					</div>


					

				</section>

			</div>