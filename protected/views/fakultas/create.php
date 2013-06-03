<?php
/* @var $this FakultasController */
/* @var $model Fakultas */

$this->breadcrumbs=array(
	'Fakultases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fakultas', 'url'=>array('index')),
	array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h1>Create Fakultas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>