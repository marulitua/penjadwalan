<?php
/* @var $this TrxKurikulumController */
/* @var $model TrxKurikulum */

$this->breadcrumbs=array(
	'Trx Kurikulums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrxKurikulum', 'url'=>array('index')),
	array('label'=>'Manage TrxKurikulum', 'url'=>array('admin')),
);
?>

<h1>Create TrxKurikulum</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>