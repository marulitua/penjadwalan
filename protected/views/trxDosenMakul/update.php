<?php
$this->breadcrumbs=array(
	'Trx Dosen Makuls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrxDosenMakul','url'=>array('index')),
	array('label'=>'Create TrxDosenMakul','url'=>array('create')),
	array('label'=>'View TrxDosenMakul','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TrxDosenMakul','url'=>array('admin')),
);
?>

<h1>Update TrxDosenMakul <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>