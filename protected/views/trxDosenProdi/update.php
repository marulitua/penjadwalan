<?php
$this->breadcrumbs=array(
	'Trx Dosen Prodis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrxDosenProdi','url'=>array('index')),
	array('label'=>'Create TrxDosenProdi','url'=>array('create')),
	array('label'=>'View TrxDosenProdi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TrxDosenProdi','url'=>array('admin')),
);
?>

<h1>Update TrxDosenProdi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>