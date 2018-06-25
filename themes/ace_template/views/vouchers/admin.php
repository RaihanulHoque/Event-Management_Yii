<?php
/* @var $this VouchersController */
/* @var $model Vouchers */

$this->breadcrumbs=array(
	'Vouchers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Vouchers', 'url'=>array('index')),
	array('label'=>'Create Vouchers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vouchers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vouchers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vouchers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'code',
		'name',
		'description',
		'uses',
		'max_uses',
		/*
		'max_uses_user',
		'type',
		'discount_percent',
		'is_fixed',
		'starts_at',
		'expires_at',
		'status',
		'created_by',
		'created_on',
		'updated_by',
		'updated_on',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
