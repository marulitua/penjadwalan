<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'prodi-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'fakultas_id'); ?>
        <?php echo $form->dropDownList($model, 'fakultas_id', CHtml::listData(Fakultas::model()->findAll(), "id", "fakultas"), array("prompt" => "Pilih Fakultas")); ?>
        <?php echo $form->error($model, 'fakultas_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'prodi_name'); ?>
        <?php echo $form->textField($model, 'prodi_name', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'prodi_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'prodi_code'); ?>
        <?php echo $form->textField($model, 'prodi_code', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'prodi_code'); ?>
    </div>
    
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->