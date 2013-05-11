<?php
$this->breadcrumbs=array(
	'Trx Dosen Prodis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrxDosenProdi','url'=>array('index')),
	array('label'=>'Manage TrxDosenProdi','url'=>array('admin')),
);
?>

<h1>Create TrxDosenProdi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>