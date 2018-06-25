<?php
/* @var $this TicketCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ticket Categories',
);

$this->menu=array(
	array('label'=>'Create TicketCategory', 'url'=>array('create')),
	array('label'=>'Manage TicketCategory', 'url'=>array('admin')),
);
?>

<h1>Ticket Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
