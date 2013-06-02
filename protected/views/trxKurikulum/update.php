<?php
/* @var $this TrxKurikulumController */
/* @var $model TrxKurikulum */

$this->breadcrumbs=array(
	'Trx Kurikulums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrxKurikulum', 'url'=>array('index')),
	array('label'=>'Create TrxKurikulum', 'url'=>array('create')),
	array('label'=>'View TrxKurikulum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TrxKurikulum', 'url'=>array('admin')),
);
?>

<h1>Update TrxKurikulum <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'update' => true)); ?>