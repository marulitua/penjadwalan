<?php
$this->breadcrumbs=array(
	'Trx Dosen Times',
);

$this->menu=array(
	array('label'=>'Create TrxDosenTime','url'=>array('create')),
	array('label'=>'Manage TrxDosenTime','url'=>array('admin')),
);
?>

<h1>Trx Dosen Times</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
