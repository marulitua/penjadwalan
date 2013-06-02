<?php
/* @var $this TrxKurikulumController */
/* @var $data TrxKurikulum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mata_kuliah_id')); ?>:</b>
	<?php echo CHtml::encode($data->mata_kuliah_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day_id')); ?>:</b>
	<?php echo CHtml::encode($data->day_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_id')); ?>:</b>
	<?php echo CHtml::encode($data->periode_id); ?>
	<br />


</div>