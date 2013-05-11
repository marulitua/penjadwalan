<?php
$this->breadcrumbs=array(
	'Trx Dosen Times'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrxDosenTime','url'=>array('index')),
	array('label'=>'Create TrxDosenTime','url'=>array('create')),
	array('label'=>'View TrxDosenTime','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TrxDosenTime','url'=>array('admin')),
);
?>

<h1>Update TrxDosenTime <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>