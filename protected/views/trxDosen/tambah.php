<script type="text/javascript">

    

</script>


<div class="span-12">

    <div class="row span-3">
        <?php
        echo CHtml::label('Hari', 'tbxHari');
        echo penjadwalan::dropDownList(CHtml::listData($model->dayToAdd(), 'id', 'day'), 'tbxHari', 'tbxHari');
        ?>
    </div>

    <div class="row span-3">
        <?php
        echo CHtml::label('Start Time', 'dboxStart');
        echo penjadwalan::dropDownList(penjadwalan::time(), 'dboxStart', 'dboxStart');
        ?>
    </div>

    <div class="row span-3">
        <?php
        echo CHtml::label('End Time', 'dboxEnd');
        echo penjadwalan::dropDownList(penjadwalan::time(), 'dboxEnd', 'dboxEnd');
        ?>
    </div>

</div>
<button id="btnSave" style="margin-top: 20px;" class="button sexybutton sexyblue">Save</button>


