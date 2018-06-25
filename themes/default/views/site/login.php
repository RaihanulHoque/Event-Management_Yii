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
						<!-- /LOGIN -->
						<?php /*
						<!-- PASSWORD -->
						<div class="col-md-6">

							<h2>Forgot <strong>Password</strong>?</h2>

							<div class="white-row">

								<p>
									Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo.
								</p>

								<!-- alert success -->
								<div class="alert alert-success">
									<i class="fa fa-check-circle"></i> 
									<strong>New Password Sent!</strong> Check your E-mail Address!
								</div>

								<!-- alert failed -->
								<div class="alert alert-danger">
									<i class="fa fa-frown-o"></i> 
									<strong>E-mail Address</strong> not found!
								</div>

								<!-- password form -->
								<label>Type your E-mail Address</label>
								<form class="input-group" method="post" action="#">
									<input type="text" class="form-control" name="s" id="s" value="" placeholder="E-mail Address" />
									<span class="input-group-btn">
										<button class="btn btn-primary">SEND</button>
									</span>
								</form>

							</div>

						</div>
						<!-- /PASSWORD -->
						*/ ?>
					</div>


					

				</section>

			</div>