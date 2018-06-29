<?php
/* @var $this GenTextCategoryController */
/* @var $model GenTextCategory */

$this->breadcrumbs=array(
	'Gen Text Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GenTextCategory', 'url'=>array('index')),
	array('label'=>'Create GenTextCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gen-text-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gen-text-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'status',
		/*
		array(
			'class'=>'CButtonColumn',
		),
		*/
	),
)); ?>
