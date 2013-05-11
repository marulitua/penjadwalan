<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosen')); ?>:</b>
	<?php echo CHtml::encode($data->dosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('makul')); ?>:</b>
	<?php echo CHtml::encode($data->makul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode')); ?>:</b>
	<?php echo CHtml::encode($data->periode); ?>
	<br />


</div>