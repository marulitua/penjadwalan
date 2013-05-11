<?php
$this->breadcrumbs=array(
	'Trx Dosen Times'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrxDosenTime','url'=>array('index')),
	array('label'=>'Create TrxDosenTime','url'=>array('create')),
	array('label'=>'Update TrxDosenTime','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TrxDosenTime','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrxDosenTime','url'=>array('admin')),
);
?>

<h1>View TrxDosenTime #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'day',
		'start_time',
		'end_time',
	),
)); ?>
