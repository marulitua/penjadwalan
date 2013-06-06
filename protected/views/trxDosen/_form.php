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
    });


    $("#btnSave").live('click', function() {

        var startTime = $("#dboxStart").val().split(':')[0];
        var endTime = $("#dboxEnd").val().split(':')[0];

        if (endTime <= startTime) {
            if ($(".alertify-logs").children().length === 0)
                l.error("Waktu akhir harus lebih besar dari waktu mulai");
            return false; // return false to cancel form action
        }


        $.ajax({
            url: "<?php echo Yii::app()->createUrl('/trxDosen/addDay'); ?>",
            data: "trx_dosen_id=" + <?php echo $model->id; ?> + "&day_id=" + $("#tbxHari").val() + "&start_time=" + $("#dboxStart").val() + "&end_time=" + $("#dboxEnd").val(),
            dataType: "json",
            success: function(data) {
                //window.location = "";
//succes
                $("#fancybox-overlay").click();
                $.fn.yiiGridView.update('dosenTime');
//                $('.testing').fancybox({'centerOnScroll': true, 'autoScale': true, 'autoDimensions': true, 'height': 100});
            }
        });


    });
    
    $("#btnUpdate").live('click', function() {

        var startTime = $("#dboxStart").val().split(':')[0];
        var endTime = $("#dboxEnd").val().split(':')[0];

        if (endTime <= startTime) {
            if ($(".alertify-logs").children().length === 0)
                l.error("Waktu akhir harus lebih besar dari waktu mulai");
            return false; // return false to cancel form action
        }


        $.ajax({
            url: "<?php echo Yii::app()->createUrl('/trxDosen/doUpdate'); ?>",
            data: "trx_dosen_time=" + $("#toUpdate").val() + "&day_id=" + $("#tbxHari").val() + "&start_time=" + $("#dboxStart").val() + "&end_time=" + $("#dboxEnd").val(),
            dataType: "json",
            success: function(data) {
                //window.location = "";
//succes
                $("#fancybox-overlay").click();
                $.fn.yiiGridView.update('dosenTime');
//                $('.testing').fancybox({'centerOnScroll': true, 'autoScale': true, 'autoDimensions': true, 'height': 100});
            }
        });


    });

    function hapus(trxDosen, toHapus) {
        // confirm dialog
        d.confirm("Hapus data ?", function(e) {
            if (!e) {
                // user clicked "ok"

                $.ajax({
                    url: "<?php echo Yii::app()->createUrl('/trxDosen/hapus'); ?>",
                    data: "trxDosen=" + trxDosen + "&toRemove=" + toHapus,
                    dataType: "json",
                    success: function(data) {
                        //window.location = "";
                        //succes
                        l.success("Success notification");
                        $.fn.yiiGridView.update('dosenTime');
//                        $('.testing').destroy();
//                        $('.testing').fancybox({'centerOnScroll': true, 'autoScale': true, 'autoDimensions': true, 'height': 100});
                    }
                });
            } else {
                // user clicked "cancel"
//                l.success('Cancel');
            }
        });
    }


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


    <?php
    if (isset($update)) {
        $model2 = new TrxDosenTime;

        $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'dosenTime',
            'dataProvider' => $model2->search(),
            //'filter'=>$model,
            'columns' => array(
                //'id',
                //'dosen_id',
//                array(
//                    'name' => 'trx_dosen_id',
//                    'header' => 'Dosen',
//                    'value' => '$data->trxDosen->dosen->full_name',
//                ),
                array(
                    'name' => 'day_id',
                    'header' => 'Day',
                    'value' => '$data->day->day',
                ),
                array(
                    'name' => 'start_time',
                    'header' => 'Start Time',
                    'value' => '$data->startTime()',
                ),
                array(
                    'name' => 'end_time',
                    'header' => 'End Time',
                    'value' => '$data->endTime()',
                ),
                array(
                    'value' => '$data->btn()',
                    'type' => 'raw',
                ),
            ),
            'afterAjaxUpdate' => 'js:function(id, data) {$(\'.testing\').fancybox({\'centerOnScroll\': true, \'autoScale\': true, \'autoDimensions\': true, \'height\': 100});}',
        ));



        $config = array(
            'centerOnScroll' => true,
            'autoScale' => true,
            'autoDimensions' => true,
            'height' => 100,
        );

        $this->widget('application.extensions.fancybox.EFancyBox', array(
            'target' => '.testing',
            'config' => $config,));

        echo CHtml::link('Tambah Hari', array('trxDosen/hari&trxDosen=' . $model->id), array('class' => 'testing'));
        //echo CHtml::ajaxButton('TESTING', array('trxDosen/hari'), null, array('id' => $model->id));
    }
    ?>


</div><!-- form -->