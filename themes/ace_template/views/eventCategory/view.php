<?php
/* @var $this EventCategoryController */
/* @var $model EventCategory */

$this->breadcrumbs=array(
	'Event Categories'=>array('admin'),
	$model->title,
);
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Category View
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New', array('create'), array('class' => 'btn btn-primary fRight',  'style'=>'margin:0 10px;')); ?>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage Categories', array('admin'), array('class' => 'btn btn-success fRight',  'style'=>'margin:0 10px;')); ?>
		<?php echo CHtml::link('<i class="ace-icon fa fa-edit"></i> Edit', array('update', 'id' => $model->id), array('class' => 'btn btn-danger fRight', 'style'=>'margin:0 10px;')); ?>
    </h1>	 
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php echo $model->title; ?></span> </h5>

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
				<div class="widget-main">
					  
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
            'name' => 'title',
            'type' => 'raw',
            'value' => $model->title,
            'htmlOptions' => array('style' => "text-align:left;width:100px;"),
        ),
 		array(
            'name' => 'created_by',
            'type' => 'raw',
            'value' => User::getData($model->created_by, "first_name"),
            'htmlOptions' => array('style' => "text-align:left;width:250px;"),
        ),
		array(
            'name' => 'created_on',
            'type' => 'raw',
            'value' => $model->created_on,
            'htmlOptions' => array('style' => "text-align:left;width:150px;"),
        ),		
 		array(
            'name' => 'updated_by',
            'type' => 'raw',
            'value' => User::getData($model->updated_by, "first_name"),
            'htmlOptions' => array('style' => "text-align:left;width:250px;"),
        ),		
		array(
            'name' => 'updated_on',
            'type' => 'raw',
            'value' => $model->updated_on,
            'htmlOptions' => array('style' => "text-align:left;width:150px;"),
        ),
		


		?>
				</div>
			</div>
		</div>
	</div>
</div>