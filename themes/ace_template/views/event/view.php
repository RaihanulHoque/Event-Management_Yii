 
<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Event Categories'=>array('admin'),
	'Manage',
);
 
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Event Detail View
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New Event', array('create'), array('class' => 'btn btn-primary fRight',  'style'=>'margin:0 10px;')); ?>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage Events', array('admin'), array('class' => 'btn btn-success fRight',  'style'=>'margin:0 10px;')); ?>
		<?php echo CHtml::link('<i class="ace-icon fa fa-edit"></i> Edit', array('update', 'id' => $model->id), array('class' => 'btn btn-danger fRight', 'style'=>'margin:0 10px;')); ?>
    </h1>	 
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
	<div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false" data-widget-colorbutton="false">
			<header>
				<span class="widget-icon"> <i class="fa fa-home"></i> </span>
			</header>
			<!-- widget div-->
			<div>
				<!-- widget content -->
				<div class="widget-body">
					<?php
				$this->widget('zii.widgets.grid.CGridView', array(
					'id' => 'ticket-reservation-counter-grid',
					'afterAjaxUpdate' => 'reinstallDatePicker',
					'dataProvider' => $model_ticketReservationCounter->searchSummary($model->id),
					'filter' => $model_ticketReservationCounter,
					'htmlOptions' => array('class' => ''),
					'itemsCssClass' => 'table table-bordered table-striped table-hover',
					'template' => '{items}{pager}{summary}',
					'pager' => array(
						'htmlOptions' => array(
							'class' => 'pagination',
						),
						'header' => '',
						'selectedPageCssClass' => 'active',
					),
					'columns' => array(
						array(
							'name' => 'event_id',
							'value' => 'Event::getData($data->event_id, "title")',
							'htmlOptions' => array('style' => "width:250px;"),
						),							
						array(
							'name' => 'ticket_category',
							'value' => 'TicketCategory::getData($data->ticket_category, "title")',
							'htmlOptions' => array('style' => "width:200px;"),
						),						
						array(
							'name' => 'total_seat_amount',
							'value' => '$data->total_seat_amount',
							'htmlOptions' => array('style' => "width:150px;"),
						),						
												
						array(
							'name' => 'reserved_seat_amount',
							//'header' => 'Sample Title',
							'value' => '$data->reserved_seat_amount',
							'htmlOptions' => array('style' => "width:150px;"),
						),												
						array(
							'name' => 'available_seat_amount',
							'value' => '$data->available_seat_amount',
							'htmlOptions' => array('style' => "width:150px;"),
						),						
												
						array(
							'name' => 'remarks',
							'value' => '$data->remarks',
							'htmlOptions' => array('style' => "width:200px;"),
						),						
						
					),
				));
				?>
				</div>
				<!-- end widget content -->
			</div>
                <!-- end widget div -->
		</div>
		<!-- end widget -->
	</div>
 
 
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
            'name' => 'client_id',
            'type' => 'raw',
            'value' => User::getData($model->client_id, "first_name"),
            'htmlOptions' => array('style' => "text-align:left;width:200px;"),
        ),
		'title',
		array(
            'name' => 'event_category',
            'type' => 'raw',
            'value' => EventCategory::getData($model->event_category, "title"),
            'htmlOptions' => array('style' => "text-align:left;width:150px;"),
        ),
		array(
            'name' => 'venue',
            'type' => 'raw',
            'value' => Gallery::getData($model->venue, "title"),
            'htmlOptions' => array('style' => "text-align:left;width:150px;"),
        ),
		

 		'date',
		'time',
		'special_info',
		'details',
		'event_cover',
		'event_thumb',
		array(
            'name' => 'status',
            'type' => 'raw',
            'value' => EventStatus::getData($model->status, "title"),
            'htmlOptions' => array('style' => "text-align:left;width:150px;"),
        ),
		'created_by',
		'created_on',
		'modified_by',
		'modified_on',
	),
)); ?>
				</div>
			</div>
		</div>
	</div>
</div>