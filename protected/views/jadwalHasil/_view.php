<?php
/* @var $this JadwalHasilController */
/* @var $data JadwalHasil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosen_id')); ?>:</b>
	<?php echo CHtml::encode($data->dosen_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruang_id')); ?>:</b>
	<?php echo CHtml::encode($data->ruang_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matakuliah_id')); ?>:</b>
	<?php echo CHtml::encode($data->matakuliah_id); ?>
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