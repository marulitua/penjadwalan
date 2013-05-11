<?php
$this->breadcrumbs=array(
	'Ruang Kelases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RuangKelas','url'=>array('index')),
	array('label'=>'Create RuangKelas','url'=>array('create')),
	array('label'=>'Update RuangKelas','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete RuangKelas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RuangKelas','url'=>array('admin')),
);
?>

<h1>View RuangKelas #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'room_rype',
		'number',
		'floor',
	),
)); ?>
