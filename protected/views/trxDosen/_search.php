<?php
/* @var $this TrxDosenController */
/* @var $model TrxDosen */
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
		<?php echo $form->label($model,'periode_id'); ?>
		<?php echo $form->textField($model,'periode_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->