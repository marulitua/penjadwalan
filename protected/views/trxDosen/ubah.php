<div class="span-12">
    <input id="toUpdate" class="hide" value="<?php echo $_GET['toUpdate']; ?>" >
    <div class="row span-3">
        <?php
        echo CHtml::label('Hari', 'tbxHari');
        echo penjadwalan::dropDownList(CHtml::listData($model->dayToUpdate($_GET['toUpdate']), 'id', 'day'), 'tbxHari', 'tbxHari', CHtml::listData(TrxDosenTime::model()->findByPk($_GET['toUpdate']), 'day_id', 'day_id'));
        ?>
    </div>

    <div class="row span-3">
        <?php
        //var_dump(CHtml::listData(TrxDosenTime::model()->findByPk($_GET['toUpdate'])->start_time, 'start_time', 'start_time'));
        $param = array();
        //var_dump(TrxDosenTime::model()->findByPk($_GET['toUpdate'])->startTime());
        $param[TrxDosenTime::model()->findByPk($_GET['toUpdate'])->startTime()] = TrxDosenTime::model()->findByPk($_GET['toUpdate'])->startTime();
        echo CHtml::label('Start Time', 'dboxStart');
        echo penjadwalan::dropDownList(penjadwalan::time(), 'dboxStart', 'dboxStart', $param);
        ?>
    </div>

    <div class="row span-3">
        <?php
        $param1 = array();
        $param1[TrxDosenTime::model()->findByPk($_GET['toUpdate'])->endTime()] = TrxDosenTime::model()->findByPk($_GET['toUpdate'])->endTime();
        echo CHtml::label('End Time', 'dboxEnd');
        echo penjadwalan::dropDownList(penjadwalan::time(), 'dboxEnd', 'dboxEnd', $param1);
        ?>
    </div>

</div>
<button id="btnUpdate" style="margin-top: 20px;" class="button sexybutton sexyblue">Save</button>


