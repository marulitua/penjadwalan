<script type="text/javascript">

    $("#btnGenerate").live('click', function() {

        $.ajax({
            url: "<?php echo Yii::app()->createUrl('site/check'); ?>",
            //data:,
            dataType: "json",
            success: function(data) {
                if (data) {
                     var msg = "";
                     for(var i=0; i< data.length;i++)
                        msg += data[i] + "<br>";
                     l.error(msg);
                }
                else{
                    alert("good to go");
                }
            },
        });
    });

</script>


<?php
//
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;
?>

<div class="row">	
    <div class="span-23 well" id="os">
        <div class="page">
            <a href="<?php echo Yii::app()->createUrl("periode/admin") ?>"><h1><i class="icon-time"></i>1. Tentukan Periode Perkuliahan</h1></a>   
        </div>
<!--        <p class="lead">
            System Operasi yang digunakan adalah Ubuntu. Jenis ubuntu yang digunakan adalah ubuntu desktop. Ubuntu dapat diperoleh di <a href="http://www.ubuntu.com/"><font color="orange">Ubuntu.com</font></a>.</p>-->
    </div>
    <div class="span-23 well" id="os">
        <div class="page">
            <a href="<?php echo Yii::app()->createUrl("trxKurikulum/admin") ?>"><h1><i class="icon-tags"></i>2. Tentukan Kurikulum</h1></a>
        </div>
<!--        <p class="lead">
            System Operasi yang digunakan adalah Ubuntu. Jenis ubuntu yang digunakan adalah ubuntu desktop. Ubuntu dapat diperoleh di <a href="http://www.ubuntu.com/"><font color="orange">Ubuntu.com</font></a>.</p>-->
    </div>
    <div class="span-23 well" id="os">
        <div class="page">
            <a href="<?php echo Yii::app()->createUrl("trxDosen/admin") ?>"><h1><i class="icon-user"></i>3. Tentukan Pengajar</h1></a>
        </div>
<!--        <p class="lead">
            System Operasi yang digunakan adalah Ubuntu. Jenis ubuntu yang digunakan adalah ubuntu desktop. Ubuntu dapat diperoleh di <a href="http://www.ubuntu.com/"><font color="orange">Ubuntu.com</font></a>.</p>
        <p class="lead">Ubuntu dengan arsitektur <strong>64 bit</strong> sangat disarankan guna mengoptimalkan kinerja hardware.</p>-->
    </div>
    <div class="span-23 well" id="os">
        <div class="page">
            <a href="<?php echo Yii::app()->createUrl("trxDosen/admin") ?>"><h1><i class="icon-list"></i>4. Tentukan Waktu Pengajar</h1></a>
        </div>
<!--        <p class="lead">
            System Operasi yang digunakan adalah Ubuntu. Jenis ubuntu yang digunakan adalah ubuntu desktop. Ubuntu dapat diperoleh di <a href="http://www.ubuntu.com/"><font color="orange">Ubuntu.com</font></a>.</p>
        <p class="lead">Ubuntu dengan arsitektur <strong>64 bit</strong> sangat disarankan guna mengoptimalkan kinerja hardware.</p>-->
    </div>
    <div class="span-10" style="margin-left:40%;">
        <button id="btnGenerate" class="btn btn-large btn-primary"><i class="icon-play-circle"></i>Generate Jadwal</button>
    </div>
</div>