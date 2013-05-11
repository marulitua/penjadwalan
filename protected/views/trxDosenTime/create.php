<?php
$this->breadcrumbs=array(
	'Trx Dosen Times'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrxDosenTime','url'=>array('index')),
	array('label'=>'Manage TrxDosenTime','url'=>array('admin')),
);
?>

<h1>Create TrxDosenTime</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>