<?php
$this->breadcrumbs=array(
	'Trx Dosen Prodis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrxDosenProdi','url'=>array('index')),
	array('label'=>'Create TrxDosenProdi','url'=>array('create')),
	array('label'=>'Update TrxDosenProdi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TrxDosenProdi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrxDosenProdi','url'=>array('admin')),
);
?>

<h1>View TrxDosenProdi #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dosen',
		'prodi',
		'periode',
	),
)); ?>
