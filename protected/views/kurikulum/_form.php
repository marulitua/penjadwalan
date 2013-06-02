<?php
/* @var $this KurikulumController */
/* @var $model Kurikulum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kurikulum-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mata_kuliah_id'); ?>
		<?php echo $form->textField($model,'mata_kuliah_id'); ?>
		<?php echo $form->error($model,'mata_kuliah_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_kelas'); ?>
		<?php echo $form->textField($model,'jumlah_kelas'); ?>
		<?php echo $form->error($model,'jumlah_kelas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->