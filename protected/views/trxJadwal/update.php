<?php
$this->breadcrumbs=array(
	'Trx Jadwals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrxJadwal','url'=>array('index')),
	array('label'=>'Create TrxJadwal','url'=>array('create')),
	array('label'=>'View TrxJadwal','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TrxJadwal','url'=>array('admin')),
);
?>

<h1>Update TrxJadwal <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>