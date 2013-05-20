<script type="text/javascript">

    $("#MataKuliah_praktek").live('click', function() {

        if ($("#areaSks").hasClass("hidden"))
        {
            $("#areaSks").removeClass("hidden")
            $("#mandatorySks").addClass("hidden")
        }
        else {
            $("#areaSks").addClass("hidden");
            $("#mandatorySks").removeClass("hidden");
        }
        
        $("#MataKuliah_sks").val(0);
    });


</script>

<?php
//Yii::app()->clientScript->registerScript('$("#MataKuliah_praktek").click(function (){ if($("#areaSks").style("hide") == true)  };)');



$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'mata-kuliah-form',
    'enableAjaxValidation' => true,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'mata_kuliah', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'mata_kuliah_code', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->labelEx($model, 'praktek'); ?>
<?php echo $form->checkBox($model, 'praktek', array('class' => 'span5')); ?>
<?php echo $form->error($model, 'praktek'); ?>

<div id="mandatorySks">
    <?php echo $form->textFieldRow($model, 'sks', array('class' => 'span5')); ?>
</div>

<div id="areaSks" class="well hidden">
    <?php
    echo CHtml::label('Teori', 'sksTeori');
    echo CHtml::textField('MataKuliah[sksTeori]', 2);
    echo CHtml::label('Praktek', 'sksPraktek');
    echo CHtml::textField('MataKuliah[sksPraktek]', 1);
    ?> 
</div>


<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
