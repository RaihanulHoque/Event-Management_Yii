<?php
/* @var $this EventCategoryController */
/* @var $model EventCategory */
/* @var $form CActiveForm */
?>
 
<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Create New Events
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage All Events', array('admin'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Create New Events</span> </h5>

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
						'id'=>'event-form',
						'enableAjaxValidation'=>false,
							'htmlOptions' => array(
								'enctype' => 'multipart/form-data',
								'class' => 'form-horizontal',
							), 

					)); ?>
						<p class="note">Fields with <span class="required">*</span> are required.</p>

						<?php echo $form->errorSummary($model); ?>
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'title', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'title', array('placeholder'=>'Event Title','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'title')?>       
							</div>
						</div>						
						 
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'client_id', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'client_id', CHtml::listData(User::model()->findAll(array('condition' => 'groupid=2', 'order' => 'first_name')), 'id', 'first_name'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'client_id'); ?>       
							</div>
						</div>
						
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'event_category', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'event_category', CHtml::listData(EventCategory::model()->findAll(array('condition' => 'status=1', 'order' => 'title')), 'id', 'title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'event_category'); ?>       
							</div>
						</div>						
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'venue', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'venue', CHtml::listData(Gallery::model()->findAll(array('condition' => '', 'order' => 'title')), 'id', 'title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'venue'); ?>       
							</div>
						</div>
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'date', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php //echo $form->textField($model, 'date', array('placeholder'=>'Event Date','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                    'model' => $model,
                                    'attribute' => 'date',
                                    'options' => array(
                                        'showOn' => 'both',             // also opens with a button
                                        'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
                                        'showOtherMonths' => true,      // show dates in other months
                                        'selectOtherMonths' => true,    // can seelect dates in other months
                                        //'changeYear' => true,           // can change year
                                        'changeMonth' => true,          // can change month
                                        'showButtonPanel' => true,      // show button panel
                                    ),
                                    'htmlOptions' => array(
                                        'size' => '10',
                                        'maxlength' => '10',
                                    ),
                                ));
                                ?>
								 <?php echo $form->error($model,'date')?>       
							</div>
						</div>

 						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'time', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'time', array('placeholder'=>'Event Timing','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'time')?>       
							</div>
						</div> 						
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'event_cover', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->fileField($model, 'event_cover', array('placeholder'=>'Event Cover Photo','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'event_cover')?>       
							</div>
						</div>
 						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'event_thumb', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->fileField($model, 'event_thumb', array('placeholder'=>'Event Vertical Photo','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'event_thumb')?>       
							</div>
						</div>
  						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'special_info', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textArea($model, 'special_info', array('placeholder'=>'Special Informations','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'special_info')?>       
							</div>
						</div>
   						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'details', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textArea($model, 'details', array('placeholder'=>'Event Description','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'details')?>       
							</div>
						</div>
						<?php /*
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'status', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'status', CHtml::listData(Status::model()->findAll(array('condition' => '', 'order' => 'id')), 'id', 'title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'status'); ?>       
							</div>
						</div>
  						*/ ?>
						<div class="form-actions">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-mini iframe', 'style' => 'margin-left: 12px; margin-top: 20px; padding: 6px 35px;')); ?>
						</div>
						<?php $this->endWidget(); ?>
				</div>
			</div>
		</div>
	</div>
</div>