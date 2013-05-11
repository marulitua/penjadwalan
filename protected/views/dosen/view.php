<?php
$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dosen','url'=>array('index')),
	array('label'=>'Create Dosen','url'=>array('create')),
	array('label'=>'Update Dosen','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Dosen','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dosen','url'=>array('admin')),
);
?>

<h1>View Dosen #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'NI',
	),
)); ?>
