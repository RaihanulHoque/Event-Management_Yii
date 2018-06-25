<?php
/* @var $this LibraryController */
/* @var $data Library */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('library_type')); ?>:</b>
	<?php echo CHtml::encode($data->library_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artist_id')); ?>:</b>
	<?php echo CHtml::encode($data->artist_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_link')); ?>:</b>
	<?php echo CHtml::encode($data->url_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('library_file')); ?>:</b>
	<?php echo CHtml::encode($data->library_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('downloadable')); ?>:</b>
	<?php echo CHtml::encode($data->downloadable); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>