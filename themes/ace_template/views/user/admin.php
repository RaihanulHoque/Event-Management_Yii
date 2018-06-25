<?php
/* @var $this UserController */
/* @var $model User */


$this->breadcrumbs=array(
	'Users'=>array('admin'),
	'Manage',
);
 

?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Users
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Manage Users
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Manage Users</span> </h5>

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
					<?php $this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('style'=>'cursor: pointer;'),
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('user/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",

	'filter'=>$model,
	'columns'=>array(
		array(
                'header'=>'Sl.',
                'value'=>'$this->grid->dataProvider->pagination->offset + $row+1',       //  row is zero based
                'htmlOptions' => array('style' => "text-align:center; width:50px !important;", 'title' => 'ID'),
        ),
		'first_name',
		'middle_name',
		'last_name',
		'username',
		'email',
		//'groupid',
		 array(
                'name' => 'groupid',
                'type' => 'raw',
                'value' => 'UserGroup::get_user_group($data->groupid)',
                'filter' => CHtml::activeDropDownList($model, 'groupid', CHtml::listData(UserGroup::model()->findAll(array("order" => "title")), 'id', 'title'), array('empty' => 'All')),
                'htmlOptions' => array('style' => "text-align:left;", 'title' => 'User Group'),
                ),
		//'company',
		/*
		array(
                'name' => 'company',
                'type' => 'raw',
                'value' => 'Company::get_company_name($data->company)', //This part is Not working
                'filter' => CHtml::activeDropDownList($model, 'company', CHtml::listData(Company::model()->findAll(array("order" => "company_name")), 'id', 'company_name'), array('empty' => 'All')),
                'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Company'),
                ),
		*/		
		//'storeowner',
		array(
                    'name' => 'status',
                    'value' => '$data->status?Yii::t(\'app\',\'Active\'):Yii::t(\'app\', \'InActive\')',
                    'filter' => array('' => Yii::t('app', 'All'), '0' => Yii::t('app', 'InActive'), '1' => Yii::t('app', 'Active')),
                    'htmlOptions' => array('style' => "text-align:center;"),
                ),
		/*
		'password',
		'registerDate',
		'lastvisitDate',
		'activation',
		'address',
		'country',
		'state',
		'city',
		'phone',
		'mobile',
		'fax',
		'website',
		'profile_picture',
		'user_type',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
				</div>
			</div>
		</div>
	</div>
</div>