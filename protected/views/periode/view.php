<?php
$this->breadcrumbs=array(
	'Periodes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Periode','url'=>array('index')),
	array('label'=>'Create Periode','url'=>array('create')),
	array('label'=>'Update Periode','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Periode','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Periode','url'=>array('admin')),
);
?>

<h1>View Periode #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tahun_ajar',
		'semester',
		'flag',
	),
)); ?>
