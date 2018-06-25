<?php
/* @var $this GallerySeatController */
/* @var $model GallerySeat */
/* @var $form CActiveForm */
?>
 
<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Gallery
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Gallery Seats
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage All Categories', array('admin'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Create Gallery Seats</span> </h5>

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
							<?php echo $form->labelEx($model,'seat_position_tracking', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'seat_position_tracking', array('placeholder'=>'Seat Position Tracking','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'seat_position_tracking')?>       
							</div>
						</div>	
						
						 <?php echo $form->errorSummary($model); ?>
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'gallery_id', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'gallery_id', CHtml::listData(Gallery::model()->findAll(array('condition' => '', 'order' => 'title')), 'id', 'title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'gallery_id')?>       
							</div>
						</div>						
						 
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'row_id', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">	
								<?php echo $form->dropDownList($model, 'row_id', CHtml::listData(GalleryRows::model()->findAll(array('condition' => '', 'order' => 'row_title')), 'id', 'row_title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'row_id'); ?>       
							</div>
						</div>						 
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'serial_no', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php //echo $form->dropDownList($model, 'serial_no', CHtml::listData(array_combine(range(1, 100), range(1, 100))), 'id', 'row_title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'serial_no'); ?>       
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