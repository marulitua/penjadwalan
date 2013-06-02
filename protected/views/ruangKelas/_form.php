<?php
/* @var $this RuangKelasController */
/* @var $model RuangKelas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ruang-kelas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

  
	<div class="row">
		<?php echo $form->labelEx($model,'praktek'); ?>
		<?php echo $form->checkBox($model, 'praktek', array('class' => 'span2')); ?>
		<?php echo $form->error($model,'praktek'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->