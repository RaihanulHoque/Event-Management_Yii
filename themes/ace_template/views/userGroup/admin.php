<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */


$this->breadcrumbs=array(
	'User Groups'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserGroup', 'url'=>array('index')),
	array('label'=>'Create UserGroup', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-group-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div>
    <h1>
    	<span class="fLeft" style="width:70%;">List of Member Group/Type</span>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New Group/Type', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
    </h1>
    <div class="bClear" style=""></div>
</div>
<?php $this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'user-group-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'details',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>