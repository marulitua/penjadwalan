<?php
/* @var $this JadwalHasilController */
/* @var $model JadwalHasil */

$this->breadcrumbs=array(
	'Jadwal Hasils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JadwalHasil', 'url'=>array('index')),
	array('label'=>'Manage JadwalHasil', 'url'=>array('admin')),
);
?>

<h1>Create JadwalHasil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>