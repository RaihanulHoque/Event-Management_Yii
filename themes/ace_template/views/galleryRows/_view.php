<?php
/* @var $this GalleryRowsController */
/* @var $data GalleryRows */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gallery_id')); ?>:</b>
	<?php echo CHtml::encode($data->gallery_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('row_title')); ?>:</b>
	<?php echo CHtml::encode($data->row_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_seats')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_seats); ?>
	<br />


</div>