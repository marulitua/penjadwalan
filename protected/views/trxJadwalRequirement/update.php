<?php
$this->breadcrumbs=array(
	'Trx Jadwal Requirements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrxJadwalRequirement','url'=>array('index')),
	array('label'=>'Create TrxJadwalRequirement','url'=>array('create')),
	array('label'=>'View TrxJadwalRequirement','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TrxJadwalRequirement','url'=>array('admin')),
);
?>

<h1>Update TrxJadwalRequirement <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>