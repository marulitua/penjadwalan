<?php
/* @var $this TrxKurikulumController */
/* @var $model TrxKurikulum */
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
		<?php echo $form->label($model,'mata_kuliah_id'); ?>
		<?php echo $form->textField($model,'mata_kuliah_id'); ?>
	</div>

<!--	<div class="row">
		<?php // echo $form->label($model,'day_id'); ?>
		<?php // echo $form->textField($model,'day_id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'jumlah_kelas'); ?>
		<?php echo $form->textField($model,'jumlah_kelas'); ?>
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