<?php
/* @var $this TicketCategoryController */
/* @var $model TicketCategory */

$this->breadcrumbs=array(
	'Ticket Categories'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TicketCategory', 'url'=>array('index')),
	array('label'=>'Manage TicketCategory', 'url'=>array('admin')),
);
?>

<h1>Create TicketCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>