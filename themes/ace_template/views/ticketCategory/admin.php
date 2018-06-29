<?php
/* @var $this TicketCategoryController */
/* @var $model TicketCategory */
/*
$count = TicketCategory::model()->countByAttributes(array(
	'event_id'=> 2,
));
print 'Total Category: '.$count; exit();
*/
$this->breadcrumbs=array(
	'Ticket Categories'=>array('admin'),
	'Manage',
);
 
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Ticket
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Manage Ticket Category
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Ticket Category</span> </h5>

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
	'id'=>'ticket-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
				
		array(
			'name' => 'event_id',
			'type' => 'raw',
			'value' => 'Event::getData($data->event_id, "title")',
			'filter' => CHtml::activeDropDownList($model, 'event_id', CHtml::listData(Event::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
			'htmlOptions' => array('style' => "text-align:left; width:350px;"),
		),
		'title',
		'seat_amount',
		array(
			'name' => 'category_color',
			'type' => 'raw',
			'value' => 'TicketCategoryColor::getData($data->category_color, "color_name")',
			'filter' => CHtml::activeDropDownList($model, 'category_color', CHtml::listData(TicketCategoryColor::model()->findAll(array('condition' => '', "order" => "color_name")), 'id', 'color_name'), array('empty' => 'All', 'class' => 'select2')),
			'htmlOptions' => array('style' => "text-align:left; width:150px;"),
		),
		'price',
		array(
                        'header' => '',
                        'class' => 'CButtonColumn',
                        'htmlOptions' => array('style' => "text-align:center;width:200px;", 'class' => ''),
                        'template' => '{view} {update} {delete}',
                        'buttons' => array(

                        'view' => array(
                          'label' => '',
                          'imageUrl' => '',
                          'url' => 'Yii::app()->createUrl("/ticketCategory/view", array("id"=>$data["id"]))',
                          'options' => array('class' => 'btn btn-xs btn-info fa fa-eye', 'style'=>'margin-bottom:2px;', 'title'=>'Detail Veiw'),
                         ),
                         'update' => array(
                          'label' => '',
                          'imageUrl' => '',
                          'url' => 'Yii::app()->createUrl("/ticketCategory/update", array("id"=>$data["id"]))',
                          'options' => array('class' => 'btn btn-xs btn-info fa fa-pencil', 'style'=>' margin-bottom:2px;', 'title'=>'Update'),
                         ),
                         'delete' => array(
                          'label' => '',
                          'imageUrl' => '',
                          'url' => 'Yii::app()->createUrl("/ticketCategory/delete", array("id"=>$data["id"]))',
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