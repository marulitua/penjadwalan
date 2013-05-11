<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'trx-dosen-makul-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'dosen',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'makul',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'periode',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
