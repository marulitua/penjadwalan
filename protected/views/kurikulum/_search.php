<?php
/* @var $this KurikulumController */
/* @var $model Kurikulum */
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

	<div class="row">
		<?php echo $form->label($model,'jumlah_kelas'); ?>
		<?php echo $form->textField($model,'jumlah_kelas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->