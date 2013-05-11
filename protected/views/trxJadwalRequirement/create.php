<?php
$this->breadcrumbs=array(
	'Trx Jadwal Requirements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrxJadwalRequirement','url'=>array('index')),
	array('label'=>'Manage TrxJadwalRequirement','url'=>array('admin')),
);
?>

<h1>Create TrxJadwalRequirement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>