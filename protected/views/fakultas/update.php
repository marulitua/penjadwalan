<?php
/* @var $this FakultasController */
/* @var $model Fakultas */

$this->breadcrumbs=array(
	'Fakultases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fakultas', 'url'=>array('index')),
	array('label'=>'Create Fakultas', 'url'=>array('create')),
	array('label'=>'View Fakultas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h1>Update Fakultas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>