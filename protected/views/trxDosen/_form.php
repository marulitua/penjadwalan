<?php
/* @var $this TrxDosenController */
/* @var $model TrxDosen */
/* @var $form CActiveForm */
?>

<script type="text/javascript">

    $(function() {
        $("#trx-dosen-form").submit(function() {
            // DO STUFF
            if ($("#select3").val() === null) {
                l.error("Harap tentukan mata kuliah");
                return false; // return false to cancel form action
            }
            else
                $("#TrxDosen_mata_kuliah").val($("#select3").val().join());
        });

    });


    $(document).ready(function() {
        $("#TrxDosen_dosen_id").select2();
    })
</script>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'trx-dosen-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'dosen_id'); ?>
        <?php
        $data = null;
        if (isset($update))
            $data = Dosen::model()->findAll();
        else
            $data = Dosen::model()->dosenToAdd();
        echo $form->dropDownList($model, 'dosen_id', CHtml::listData($data, 'id', 'full_name'));
        ?>	
        <?php echo $form->error($model, 'dosen_id'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('Mata Kuliah', 'TrxDosen[day_id]'); ?>
        <?php
        if (isset($update)) {

            echo penjadwalan::selected2(CHtml::listData(MataKuliah::model()->assignMatakuliah(), 'id', 'mata_kuliah'), 'select3', 'select3', $model->showMataKuliah2());
        }
        else
            echo penjadwalan::selected2(CHtml::listData(MataKuliah::model()->assignMatakuliah(), 'id', 'mata_kuliah'), 'select3', 'select3');
        ?>
        <?php // echo $form->error($model, 'day_id');  ?>
        <div class="hide">
            <input type="text" id="TrxDosen_mata_kuliah" name="TrxDosen[mata_kuliah]">
        </div>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

    <div class="hide">
        <?php
        $this->widget('bootstrap.widgets.TbSelect2', array(
            'asDropDownList' => false,
            'name' => 'asdas',
            'options' => array(
                'tags' => array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu'),
                'width' => '40%',
            )
        ));
        ?>
    </div>


</div><!-- form -->