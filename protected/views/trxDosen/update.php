<?php
/* @var $this TrxDosenController */
/* @var $model TrxDosen */

$this->breadcrumbs=array(
	'Trx Dosens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrxDosen', 'url'=>array('index')),
	array('label'=>'Create TrxDosen', 'url'=>array('create')),
	array('label'=>'View TrxDosen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TrxDosen', 'url'=>array('admin')),
);
?>

<h1>Update TrxDosen <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>