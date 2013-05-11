<?php
$this->breadcrumbs=array(
	'Trx Dosen Makuls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrxDosenMakul','url'=>array('index')),
	array('label'=>'Create TrxDosenMakul','url'=>array('create')),
	array('label'=>'Update TrxDosenMakul','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TrxDosenMakul','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrxDosenMakul','url'=>array('admin')),
);
?>

<h1>View TrxDosenMakul #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dosen',
		'makul',
		'periode',
	),
)); ?>
