<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>

<h1>Create Prodi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>