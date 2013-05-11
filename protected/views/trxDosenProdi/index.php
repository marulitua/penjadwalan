<?php
$this->breadcrumbs=array(
	'Trx Dosen Prodis',
);

$this->menu=array(
	array('label'=>'Create TrxDosenProdi','url'=>array('create')),
	array('label'=>'Manage TrxDosenProdi','url'=>array('admin')),
);
?>

<h1>Trx Dosen Prodis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
