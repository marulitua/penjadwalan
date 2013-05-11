<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mata_kuliah')); ?>:</b>
	<?php echo CHtml::encode($data->mata_kuliah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mata_kuliah_code')); ?>:</b>
	<?php echo CHtml::encode($data->mata_kuliah_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('praktek')); ?>:</b>
	<?php echo CHtml::encode($data->praktek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sks')); ?>:</b>
	<?php echo CHtml::encode($data->sks); ?>
	<br />


</div>