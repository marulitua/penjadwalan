<?php
/* @var $this TrxKurikulumController */
/* @var $model TrxKurikulum */
/* @var $form CActiveForm */
?>

<script type="text/javascript">

    $(function() {

        $("#trx-kurikulum-form").submit(function() {
            // DO STUFF
            if ($("#TrxKurikulum_jumlah_kelas").val() === "") {
                if ($(".alertify-logs").children().length === 0)
                    l.error("Harap tentukan jumlah kelas");
                return false; // return false to cancel form action
            }

            if ($("#select2").val() !== "")
                $("#TrxKurikulum_day_id").val($("#select2").val().join());


            if ($("#select3").val() !== "")
                $("#TrxKurikulum_ruang_kelas").val($("#select3").val().join());

        });


    });

    $(document).ready(function() {
        $("#TrxKurikulum_mata_kuliah_id").select2();
    });

</script>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'trx-kurikulum-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">
        <?php echo $form->labelEx($model, 'mata_kuliah_id'); ?>
        <?php
        $data = null;
        if (isset($update))
            $data = MataKuliah::model()->findAll();
        else
            $data = MataKuliah::model()->mataKuliahToAdd();
        echo $form->dropDownList($model, 'mata_kuliah_id', CHtml::listData($data, 'id', 'text'));
        ?>		
        <?php echo $form->error($model, 'mata_kuliah_id'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('Day', 'TrxKurikulum[day_id]'); ?>
        <?php
        if (isset($update)) {

            echo penjadwalan::selected2(CHtml::listData(Day::model()->findAll('id < 7'), 'id', 'day'), 'select2', 'select2', $model->findDay2());
        }
        else
            echo penjadwalan::selected2(CHtml::listData(Day::model()->findAll('id < 7'), 'id', 'day'), 'select2', 'select2');
        ?>
        <?php // echo $form->error($model, 'day_id');  ?>
        <div class="hide">
            <input type="text" id="TrxKurikulum_day_id" name="TrxKurikulum[day_id]">
        </div>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'jumlah_kelas'); ?>
        <?php echo $form->textField($model, 'jumlah_kelas'); ?>
        <?php echo $form->error($model, 'jumlah_kelas'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('Ruang Perkuliahan', 'TrxKurikulum[ruang_kelas]'); ?>
        <?php
        if (isset($update)) {
            echo penjadwalan::selected2(CHtml::listData(RuangKelas::model()->findAll(), 'id', 'number'), 'select3', 'select3', $model->findRoom2());
        }
        else
            echo penjadwalan::selected2(CHtml::listData(RuangKelas::model()->findAll(), 'id', 'number'), 'select3', 'select3');
        ?>
<?php // echo $form->error($model, 'day_id');   ?>
        <div class="hide">
            <input type="text" id="TrxKurikulum_ruang_kelas" name="TrxKurikulum[ruang_kelas]">
        </div>
    </div>


    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php
    $this->endWidget();
    ?>

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