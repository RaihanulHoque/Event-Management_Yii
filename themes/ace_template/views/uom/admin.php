<?php
/* @var $this UomController */
/* @var $model Uom */

$this->breadcrumbs=array(
	'Uoms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Uom', 'url'=>array('index')),
	array('label'=>'Create Uom', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#uom-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
 
  <div>
    <h1><span class="fLeft" style="width:70%;">Unit of Measurement</span></h1>
	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New ', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
    <div class="bClear" style=""></div>
</div>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'uom-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
                'header'=>'Sl.',
                'value'=>'$this->grid->dataProvider->pagination->offset + $row+1',       //  row is zero based
                'htmlOptions' => array('style' => "text-align:center; width:5% !important;", 'title' => 'ID'),
       		 ),
		//'company_id',
		array(
                'name' => 'full_name',
                'type' => 'raw',
                'value' => '$data->full_name', //This part is Not working
                'htmlOptions' => array('style' => "text-align:left; width:73%; padding-left:10px;", 'title' => 'User Name'),
        ),
  		array(
                'name' => 'formal_name',
                'type' => 'raw',
                'value' => '$data->formal_name', //This part is Not working
                'htmlOptions' => array('style' => "text-align:left; width:10%; text-align:center;", 'title' => 'User Name'),
        ),
        array(
                'name' => 'decimal_place',
                'type' => 'raw',
                'value' => '$data->decimal_place', //This part is Not working
                'htmlOptions' => array('style' => "text-align:left; width:10%; text-align:center;", 'title' => 'User Name'),
        ),
 		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php echo CHtml::link('<i class="icon-plus"></i> Add New', array('create'), array('class' => 'btn btn-primary fLeft', 'style'=>"")); ?>
