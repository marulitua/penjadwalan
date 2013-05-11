<?php
$this->breadcrumbs=array(
	'Trx Jadwal Requirements',
);

$this->menu=array(
	array('label'=>'Create TrxJadwalRequirement','url'=>array('create')),
	array('label'=>'Manage TrxJadwalRequirement','url'=>array('admin')),
);
?>

<h1>Trx Jadwal Requirements</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
