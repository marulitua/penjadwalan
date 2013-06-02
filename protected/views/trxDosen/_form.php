<?php
/* @var $this TrxDosenController */
/* @var $model TrxDosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trx-dosen-form',
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
		<?php echo $form->labelEx($model,'mata_kuliah_id'); ?>
		<?php echo $form->textField($model,'mata_kuliah_id'); ?>
		<?php echo $form->error($model,'mata_kuliah_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periode_id'); ?>
		<?php echo $form->textField($model,'periode_id'); ?>
		<?php echo $form->error($model,'periode_id'); ?>
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