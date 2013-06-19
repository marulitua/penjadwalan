<?php
/* @var $this JadwalHasilController */
/* @var $model JadwalHasil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jadwal-hasil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dosen_id'); ?>
		<?php echo $form->textField($model,'dosen_id'); ?>
		<?php echo $form->error($model,'dosen_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruang_id'); ?>
		<?php echo $form->textField($model,'ruang_id'); ?>
		<?php echo $form->error($model,'ruang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matakuliah_id'); ?>
		<?php echo $form->textField($model,'matakuliah_id'); ?>
		<?php echo $form->error($model,'matakuliah_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day_id'); ?>
		<?php echo $form->textField($model,'day_id'); ?>
		<?php echo $form->error($model,'day_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time'); ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
		<?php echo $form->textField($model,'end_time'); ?>
		<?php echo $form->error($model,'end_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->