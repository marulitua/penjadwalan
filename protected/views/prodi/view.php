<?php
$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Prodi','url'=>array('index')),
	array('label'=>'Create Prodi','url'=>array('create')),
	array('label'=>'Update Prodi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Prodi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prodi','url'=>array('admin')),
);
?>

<h1>View Prodi #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'prodi_name',
		'prodi_code',
	),
)); ?>
