<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'User'=>array('admin'),
	$model->first_name,
);
?>


<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> 
		Manage Users 
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php echo $model->first_name; ?>
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New User', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
        <?php echo CHtml::link('<i class="ace-icon fa fa-edit"></i> Edit', array('update', 'id' => $model->id), array('class' => 'btn btn-danger fRight', 'style'=>'margin:0 10px;')); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->first_name; ?>User Details</span> </h5>

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
					  

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
    	'profile_picture',
		'id',
		'first_name',
		'middle_name',
		'last_name',
		'username',
		'email',
		'registerDate',
		'lastvisitDate',
		'activation',
		'group_id',
		'address',
		'country',
		'state',
		'city',
		'phone',
		'mobile',
		'company',
		'user_type',
		'status',
	),
)); ?>

				</div>
			</div>
		</div>
	</div>
</div>