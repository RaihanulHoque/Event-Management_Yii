<?php
/* @var $this TicketReservationParentController */
/* @var $model TicketReservationParent */

$this->breadcrumbs=array(
	'Ticket Reservation Parents'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TicketReservationParent', 'url'=>array('index')),
	array('label'=>'Create TicketReservationParent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ticket-reservation-parent-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Ticket
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Ticket Reservation Parent
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ticket-reservation-parent-grid',
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
		array(
			'name' => 'reservation_type',
			'type' => 'raw',
			'value' => 'TicketReservationType::getData($data->reservation_type, "reservation_type")',
			'filter' => CHtml::activeDropDownList($model, 'reservation_type', CHtml::listData(TicketReservationType::model()->findAll(array('condition' => '', "order" => "reservation_type")), 'id', 'reservation_type'), array('empty' => 'All', 'class' => 'select2')),
			'htmlOptions' => array('style' => "text-align:left; width:350px;"),
		),
		array(
			'name' => 'ticket_category',
			'type' => 'raw',
			'value' => 'TicketCategory::getData($data->ticket_category, "title")',
			'filter' => CHtml::activeDropDownList($model, 'ticket_category', CHtml::listData(TicketCategory::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
			'htmlOptions' => array('style' => "text-align:left; width:350px;"),
		),
		array(
			'name' => 'user_id',
			'type' => 'raw',
			'value' => 'User::getData($data->user_id, "first_name")',
			'htmlOptions' => array('style' => "text-align:left; width:350px;"),
		),
		'unit_price',
		'num_of_ticket',
		'total_price',
		'created_on',
		/**/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
