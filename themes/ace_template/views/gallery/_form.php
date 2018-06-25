<?php
/* @var $this GalleryController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i>Gallery
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?> Add New Gallery/Auditorium
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage All Gallery', array('admin'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Add Gallery</span> </h5>

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
						'id'=>'gallery-form',
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
								 <?php echo $form->textField($model, 'title', array('placeholder'=>'Category Title','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'title')?>       
							</div>
						</div>						
 
 						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'gallery_type', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'gallery_type', CHtml::listData(GalleryType::model()->findAll(array('condition' => '', 'order' => 'title')), 'id', 'title'), array('class' => 'span5', 'empty'=>'*** Please Select ***')); ?>
								 <?php echo $form->error($model,'gallery_type'); ?>       
							</div>
						</div>	

						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'number_of_floor', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'number_of_floor', array('placeholder'=>'Number of Floor','rows' => 2, 'span' => 5, 'maxlength' => 50)); ?>
								 <?php echo $form->error($model,'number_of_floor')?>       
							</div>
						</div>
						
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'photo', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->fileField($model, 'photo', array('placeholder'=>'Gallery Photo','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'photo')?>       
							</div>
						</div>						
		<?php if($model->isNewRecord!='1'){ ?>
		<div class="row">
			 <?php echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/gallery/'.$model->image_rename,"image",array("width"=>200));// Image shown here if page is update page ?>  
		</div>		
		<?php } ?>
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'total_capacity', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'total_capacity', array('placeholder'=>'Remarks','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'total_capacity')?>       
							</div>
						</div>						
											 
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'location_map', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textArea($model, 'location_map', array('placeholder'=>'Remarks','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'location_map')?>       
							</div>
						</div>						
 						 
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'address', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textArea($model, 'address', array('placeholder'=>'Remarks','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'address')?>       
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