<?php
/* @var $this BannerStatusController */
/* @var $model BannerStatus */

$this->breadcrumbs=array(
	'Banner Statuses'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BannerStatus', 'url'=>array('index')),
	array('label'=>'Create BannerStatus', 'url'=>array('create')),
);

?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Banner Status
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Manage All 
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'banner-status-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
