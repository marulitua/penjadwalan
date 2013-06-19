<?php
/* @var $this JadwalHasilController */
/* @var $model JadwalHasil */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dosen_id'); ?>
		<?php echo $form->textField($model,'dosen_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruang_id'); ?>
		<?php echo $form->textField($model,'ruang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matakuliah_id'); ?>
		<?php echo $form->textField($model,'matakuliah_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'day_id'); ?>
		<?php echo $form->textField($model,'day_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_time'); ?>
		<?php echo $form->textField($model,'end_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->