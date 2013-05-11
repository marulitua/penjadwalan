<?php
$this->breadcrumbs=array(
	'Trx Jadwals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrxJadwal','url'=>array('index')),
	array('label'=>'Create TrxJadwal','url'=>array('create')),
	array('label'=>'Update TrxJadwal','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TrxJadwal','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrxJadwal','url'=>array('admin')),
);
?>

<h1>View TrxJadwal #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dosen',
		'mata_kuliah',
		'ruang_kelas',
		'periode',
		'start_time',
		'end_time',
	),
)); ?>
