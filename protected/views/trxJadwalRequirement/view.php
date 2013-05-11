<?php
$this->breadcrumbs=array(
	'Trx Jadwal Requirements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrxJadwalRequirement','url'=>array('index')),
	array('label'=>'Create TrxJadwalRequirement','url'=>array('create')),
	array('label'=>'Update TrxJadwalRequirement','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TrxJadwalRequirement','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrxJadwalRequirement','url'=>array('admin')),
);
?>

<h1>View TrxJadwalRequirement #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mata_kuliah',
		'kelas',
		'periode',
	),
)); ?>
