<?php
/* @var $this TrxDosenController */
/* @var $model TrxDosen */

$this->breadcrumbs=array(
	'Trx Dosens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrxDosen', 'url'=>array('index')),
	array('label'=>'Manage TrxDosen', 'url'=>array('admin')),
);
?>

<h1>Create TrxDosen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>