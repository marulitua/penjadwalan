<?php
/* @var $this TrxKurikulumController */
/* @var $model TrxKurikulum */
/* @var $form CActiveForm */
?>

<script type="text/javascript">

    $(function() {

        $("#trx-kurikulum-form").submit(function() {
            // DO STUFF
            if ($('.select2-search-choice').length === 0) {
                if ($(".alertify-logs").children().length === 0)
                    l.error("Harap tentukan hari perkuliahan");
                return false; // return false to cancel form action
            }

            if ($("#TrxKurikulum_jumlah_kelas").val() === "") {
                if ($(".alertify-logs").children().length === 0)
                    l.error("Harap tentukan jumlah kelas");
                return false; // return false to cancel form action
            }
        })
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
            if(isset($update))
                $data = MataKuliah::model()->findAll ();
            else    
                $data = MataKuliah::model()->mataKuliahToAdd();          
            echo $form->dropDownList($model, 'mata_kuliah_id', CHtml::listData($data, 'id', 'mata_kuliah')); 
            ?>		
        <?php echo $form->error($model, 'mata_kuliah_id'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('Day', 'TrxKurikulum[day_id]'); ?>
        <?php
        
        $this->widget('bootstrap.widgets.TbSelect2', array(
            'asDropDownList' => false,
            'name' => 'TrxKurikulum[day_id]',
            'options' => array(
                'tags' => array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu'),
                'width' => '40%',
        )));
        
        if(isset($update))
        {
            //
            $param = $model->findDay();
            //echo print_r($param);
            $param = explode(',', $param);
            
            $value = null;
            foreach ($param as $a){
                if($value)
                    $value .= ', \''.$a.'\'';
                else
                    $value = '\''.$a.'\'';
            }
            
            Yii::app()->clientScript->registerScript('auto','$("#s2id_TrxKurikulum_day_id").select2("val", ['.$value.']);');
        }
        ?>
        <?php // echo $form->error($model, 'day_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'jumlah_kelas'); ?>
        <?php echo $form->textField($model, 'jumlah_kelas'); ?>
        <?php echo $form->error($model, 'jumlah_kelas'); ?>
    </div>

    <!--	<div class="row">
    <?php //echo $form->labelEx($model,'periode_id');  ?>
    <?php //echo $form->textField($model,'periode_id');  ?>
    <?php //echo $form->error($model,'periode_id'); ?>
            </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>


</div><!-- form -->