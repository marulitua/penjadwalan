<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosen')); ?>:</b>
	<?php echo CHtml::encode($data->dosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mata_kuliah')); ?>:</b>
	<?php echo CHtml::encode($data->mata_kuliah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruang_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->ruang_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode')); ?>:</b>
	<?php echo CHtml::encode($data->periode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />


</div>