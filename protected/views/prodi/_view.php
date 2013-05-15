<?php
/* @var $this ProdiController */
/* @var $data Prodi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fakultas_id')); ?>:</b>
	<?php echo CHtml::encode($data->fakultas_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prodi_name')); ?>:</b>
	<?php echo CHtml::encode($data->prodi_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prodi_code')); ?>:</b>
	<?php echo CHtml::encode($data->prodi_code); ?>
	<br />


</div>