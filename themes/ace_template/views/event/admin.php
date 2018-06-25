<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Events'=>array('admin'),
	'Manage',
);

?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Events
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Manage Events
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New Event', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Manage Events</span> </h5>

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
					<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'event-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'columns'=>array(
						'id',						
						array(
							'name' => 'title',
							'type' => 'raw',
							'value' => '$data->title',
							'htmlOptions' => array('style' => "text-align:left; width:200px;"),
						),
						array(
							'name' => 'client_id',
							'type' => 'raw',
							'value' => 'User::getData($data->client_id, "first_name")',
							'filter' => CHtml::activeDropDownList($model, 'client_id', CHtml::listData(User::model()->findAll(array('condition' => '', "order" => "first_name")), 'id', 'first_name'), array('empty' => 'All', 'class' => 'select2')),
							'htmlOptions' => array('style' => "text-align:left; width:200px;"),
						),
						array(
							'name' => 'event_category',
							'type' => 'raw',
							'value' => 'EventCategory::getData($data->event_category, "title")',
							'filter' => CHtml::activeDropDownList($model, 'event_category', CHtml::listData(EventCategory::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
							'htmlOptions' => array('style' => "text-align:left; width:150px;"),
						),
						array(
							'name' => 'venue',
							'type' => 'raw',
							'value' => 'Gallery::getData($data->venue, "title")',
							'filter' => CHtml::activeDropDownList($model, 'venue', CHtml::listData(Gallery::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
							'htmlOptions' => array('style' => "text-align:left;width:150px;"),
						),
						array(
							'name' => 'date',
							'type' => 'raw',
							'value' => '$data->date',
							'htmlOptions' => array('style' => "text-align:left; width:200px;"),
						),
						array(
							'name' => 'time',
							'type' => 'raw',
							'value' => '$data->time',
							'htmlOptions' => array('style' => "text-align:left; width:200px;"),
						),
						array(
							'name' => 'special_info',
							'type' => 'raw',
							'value' => '$data->special_info',
							'htmlOptions' => array('style' => "text-align:left; width:200px;"),
						),
						 
						//'details',
						//'event_cover',
						//'event_thumb',
						//'created_by',
						//'created_on',
						//'modified_by',
						//'modified_on',
						array(
							'name' => 'status',
							'type' => 'raw',
							'value' => 'EventStatus::getData($data->status, "title")',
							'filter' => CHtml::activeDropDownList($model, 'status', CHtml::listData(EventStatus::model()->findAll(array('condition' => '', "order" => "id")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
							'htmlOptions' => array('style' => "text-align:left;width:150px;"),
						),
						
						array(
                        'header' => '',
                        'class' => 'CButtonColumn',
                        'htmlOptions' => array('style' => "text-align:center;width:200px;", 'class' => ''),
                        'template' => '{view} {update} {delete}',
                        'buttons' => array(

                        'view' => array(
                          'label' => '',
                          'imageUrl' => '',
                          'url' => 'Yii::app()->createUrl("/event/view", array("id"=>$data["id"]))',
                          'options' => array('class' => 'btn btn-xs btn-info fa fa-eye', 'style'=>'margin-bottom:2px;', 'title'=>'Detail Veiw'),
                         ),
                         'update' => array(
                          'label' => '',
                          'imageUrl' => '',
                          'url' => 'Yii::app()->createUrl("/event/update", array("id"=>$data["id"]))',
                          'options' => array('class' => 'btn btn-xs btn-info fa fa-pencil', 'style'=>' margin-bottom:2px;', 'title'=>'Update'),
                         ),
                         'delete' => array(
                          'label' => '',
                          'imageUrl' => '',
                          'url' => 'Yii::app()->createUrl("/event/delete", array("id"=>$data["id"]))',
                          'options' => array('class' => 'btn btn-xs btn-danger fa fa-trash-o' ,'style'=>' '),
                         ),
                        ),
				
                )
					),
				)); ?>
				</div>
			</div>
		</div>
	</div>
</div>

