<?php
/* @var $this PeriodeController */
/* @var $model Periode */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'periode-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_ajar'); ?>
		<?php echo $form->textField($model,'tahun_ajar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tahun_ajar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semester_id'); ?>
                <?php echo $form->dropDownList($model,'semester_id', CHtml::listData(Semester::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'semester_id'); ?>
	</div>

        <?php echo $form->labelEx($model, 'flag'); ?>
        <?php echo $form->checkBox($model, 'flag'); ?>
        <?php echo $form->error($model, 'flag'); ?>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->