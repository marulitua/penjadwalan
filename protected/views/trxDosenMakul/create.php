<?php
$this->breadcrumbs=array(
	'Trx Dosen Makuls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrxDosenMakul','url'=>array('index')),
	array('label'=>'Manage TrxDosenMakul','url'=>array('admin')),
);
?>

<h1>Create TrxDosenMakul</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>