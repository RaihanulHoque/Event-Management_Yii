<?php
/* @var $this GenTextController */
/* @var $model GenText */

$this->breadcrumbs=array(
	'GenText'=>array('admin'),
	'Manage',
);
?>

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> General Text
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Manage All 
		</small>
    	<?php //echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Add New', array('create'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>Manage All General Text</span> </h5>

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
						'id'=>'gen-text-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'columns'=>array(
							 
							array(
								'name'=>'title',
								'value'=>'$data->title',       
								'htmlOptions' => array('style' => "text-align:center; width:200px !important;", 'title' => 'ID'),
							 ),
							array(
								'name' => 'category',
								'type' => 'raw',
								'value' => 'GenTextCategory::getData($data->category, "title")',
								'filter' => CHtml::activeDropDownList($model, 'category', CHtml::listData(GenTextCategory::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
								'htmlOptions' => array('style' => "text-align:left;width:100px;"),
							),							
							/*							
							 array(
								'name'=>'detail',
								'value'=>'GenText::limitCharacter($data->detail, 200)',       
								'htmlOptions' => array('style' => "text-align:center; width:600px !important;", 'title' => 'detail'),
							 ), 
							 */
							array(
								'name' => 'category',
								'type' => 'raw',
								'value' => 'GenTextCategory::getData($data->category, "title")',
								'filter' => CHtml::activeDropDownList($model, 'category', CHtml::listData(GenTextCategory::model()->findAll(array('condition' => '', "order" => "title")), 'id', 'title'), array('empty' => 'All', 'class' => 'select2')),
								'htmlOptions' => array('style' => "text-align:left;width:100px;"),
							),							 
							 
							array(
								'header' => '',
								'class' => 'CButtonColumn',
								'htmlOptions' => array('style' => "text-align:center;width:200px;", 'class' => ''),
								'template' => '{view} {update}',
								'buttons' => array(

								'view' => array(
								  'label' => '',
								  'imageUrl' => '',
								  'url' => 'Yii::app()->createUrl("/genText/view", array("id"=>$data["id"]))',
								  'options' => array('class' => 'btn btn-xs btn-info fa fa-eye', 'style'=>'margin-bottom:2px;', 'title'=>'Detail Veiw'),
								 ),
								 'update' => array(
								  'label' => '',
								  'imageUrl' => '',
								  'url' => 'Yii::app()->createUrl("/genText/update", array("id"=>$data["id"]))',
								  'options' => array('class' => 'btn btn-xs btn-info fa fa-pencil', 'style'=>' margin-bottom:2px;', 'title'=>'Update'),
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