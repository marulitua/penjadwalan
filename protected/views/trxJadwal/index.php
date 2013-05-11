<?php
$this->breadcrumbs=array(
	'Trx Jadwals',
);

$this->menu=array(
	array('label'=>'Create TrxJadwal','url'=>array('create')),
	array('label'=>'Manage TrxJadwal','url'=>array('admin')),
);
?>

<h1>Trx Jadwals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
