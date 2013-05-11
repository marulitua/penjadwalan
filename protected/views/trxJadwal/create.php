<?php
$this->breadcrumbs=array(
	'Trx Jadwals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrxJadwal','url'=>array('index')),
	array('label'=>'Manage TrxJadwal','url'=>array('admin')),
);
?>

<h1>Create TrxJadwal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>