<?php
/* @var $this TicketCategoryController */
/* @var $model TicketCategory */

$this->breadcrumbs=array(
	'Ticket Categories'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TicketCategory', 'url'=>array('index')),
	array('label'=>'Create TicketCategory', 'url'=>array('create')),
	array('label'=>'View TicketCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TicketCategory', 'url'=>array('admin')),
);
?>

<h1>Update TicketCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>