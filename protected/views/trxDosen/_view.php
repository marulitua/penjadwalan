<?php
/* @var $this TrxDosenController */
/* @var $data TrxDosen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosen_id')); ?>:</b>
	<?php echo CHtml::encode($data->dosen_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mata_kuliah_id')); ?>:</b>
	<?php echo CHtml::encode($data->mata_kuliah_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_id')); ?>:</b>
	<?php echo CHtml::encode($data->periode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day_id')); ?>:</b>
	<?php echo CHtml::encode($data->day_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />


</div>