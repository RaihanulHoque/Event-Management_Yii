<?php
/* @var $this TicketReservationTypeController */
/* @var $model TicketReservationType */

$this->breadcrumbs=array(
	'Ticket Reservation Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TicketReservationType', 'url'=>array('index')),
	array('label'=>'Create TicketReservationType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ticket-reservation-type-grid').yiiGridView('update', {
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
			<?php //echo $model->activity_title; ?>Ticket Reservation Type
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
	'id'=>'ticket-reservation-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'reservation_type',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
