<?php
/* @var $this GenTextController */
/* @var $model GenText */

$this->breadcrumbs=array(
	'Gen Texts'=>array('admin'),
	$model->title,
);
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Webstie General Texts
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php echo $model->title; ?> 
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage', array('admin'), array('class' => 'btn btn-success fRight',  'style'=>'margin:0 10px;')); ?>
		<?php echo CHtml::link('<i class="ace-icon fa fa-edit"></i> Edit', array('update', 'id' => $model->id), array('class' => 'btn btn-danger fRight', 'style'=>'margin:0 10px;')); ?>
    </h1>	 
    <div class="bClear" style=""></div>
</div>

<div class="row">
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
			'name'=>'title',
			'value'=>$model->title,       
			'htmlOptions' => array('style' => "text-align:center; width:200px !important;", 'title' => 'ID'),
		 ),
		array(
			'name' => 'category',
			'type' => 'raw',
			'value' => GenTextCategory::getData($model->category, "title"),
			'filter' => CHtml::activeDropDownList($model, 'category', CHtml::listData(GenTextCategory::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
			'htmlOptions' => array('style' => "text-align:left;width:100px;"),
		),							
									
		 array(
			'name'=>'detail',
			'type'=>'raw',
			'value'=>$model->detail,       
			'htmlOptions' => array('style' => "text-align:left; width:600px !important;", 'title' => 'detail'),
		 ), 
		 
		array(
			'name' => 'status',
			'type' => 'raw',
			'value' => Status::getData($model->status, "title"),
			'filter' => CHtml::activeDropDownList($model, 'status', CHtml::listData(Status::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
			'htmlOptions' => array('style' => "text-align:left;width:100px;"),
		),		
	),
)); 
		?>
				</div>
			</div>
		</div>
	</div>
</div>