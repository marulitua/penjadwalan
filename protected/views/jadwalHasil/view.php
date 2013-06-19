<?php
/* @var $this JadwalHasilController */
/* @var $model JadwalHasil */

$this->breadcrumbs=array(
	'Jadwal Hasils'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JadwalHasil', 'url'=>array('index')),
	array('label'=>'Create JadwalHasil', 'url'=>array('create')),
	array('label'=>'Update JadwalHasil', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JadwalHasil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JadwalHasil', 'url'=>array('admin')),
);
?>

<h1>View JadwalHasil #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dosen_id',
		'ruang_id',
		'matakuliah_id',
		'day_id',
		'start_time',
		'end_time',
	),
)); ?>
