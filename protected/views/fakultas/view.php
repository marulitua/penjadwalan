<?php
/* @var $this FakultasController */
/* @var $model Fakultas */

$this->breadcrumbs=array(
	'Fakultases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fakultas', 'url'=>array('index')),
	array('label'=>'Create Fakultas', 'url'=>array('create')),
	array('label'=>'Update Fakultas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fakultas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h1>View Fakultas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fakultas',
	),
)); ?>
