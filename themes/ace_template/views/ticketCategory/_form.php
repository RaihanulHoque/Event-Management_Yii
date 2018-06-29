<?php
/* @var $this TicketCategoryController */
/* @var $model TicketCategory */
/* @var $form CActiveForm */
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Ticket
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Categories
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage All Categories', array('admin'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Create Ticket Category</span> </h5>

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
						'id'=>'gallery-seat-form',
						'enableAjaxValidation'=>false,
							'htmlOptions' => array(
								'enctype' => 'multipart/form-data',
								'class' => 'form-horizontal',
							), 

					)); ?>
						<p class="note">Fields with <span class="required">*</span> are required.</p>

 
						<?php echo $form->errorSummary($model); ?>
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'event_id', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'event_id', CHtml::listData(Event::model()->findAll(array('condition' => '', 'order' => 'title')), 'id', 'title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'event_id')?>       
							</div>
						</div>	
 
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'title', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'title', array('placeholder'=>'Ticket Category Title','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'title')?>       
							</div>
						</div>
 
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'seat_amount', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'seat_amount', array('placeholder'=>'Number of Seats of This Category','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'seat_amount')?>       
							</div>
						</div>

						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'price', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'price', array('placeholder'=>'Ticket Price for this Category','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'price')?>       
							</div>
						</div>

						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'category_color', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">	
								<?php echo $form->dropDownList($model, 'category_color', CHtml::listData(TicketCategoryColor::model()->findAll(array('condition' => '', 'order' => 'color_name')), 'id', 'color_name'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'category_color'); ?>       
							</div>
						</div>		
						
						<div class="form-actions">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-mini iframe', 'style' => 'margin-left: 12px; margin-top: 20px; padding: 6px 35px;')); ?>
						</div>
						<?php $this->endWidget(); ?>

				</div>
			</div>
		</div>
	</div>
</div>