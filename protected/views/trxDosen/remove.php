<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trx-dosen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<div class="well">
    <div>
        Apakah anda yakin ?
    </div>
    <div>
        <input type="button" class="btn-primary" id="btnDelete" value="Ya">
    </div>
</div>
