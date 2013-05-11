<?php
$this->breadcrumbs=array(
	'Trx Dosen Makuls',
);

$this->menu=array(
	array('label'=>'Create TrxDosenMakul','url'=>array('create')),
	array('label'=>'Manage TrxDosenMakul','url'=>array('admin')),
);
?>

<h1>Trx Dosen Makuls</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
