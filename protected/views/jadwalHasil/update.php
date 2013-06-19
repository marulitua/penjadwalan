<?php
/* @var $this JadwalHasilController */
/* @var $model JadwalHasil */

$this->breadcrumbs=array(
	'Jadwal Hasils'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JadwalHasil', 'url'=>array('index')),
	array('label'=>'Create JadwalHasil', 'url'=>array('create')),
	array('label'=>'View JadwalHasil', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JadwalHasil', 'url'=>array('admin')),
);
?>

<h1>Update JadwalHasil <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>