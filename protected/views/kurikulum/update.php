<?php
/* @var $this KurikulumController */
/* @var $model Kurikulum */

$this->breadcrumbs=array(
	'Kurikulums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kurikulum', 'url'=>array('index')),
	array('label'=>'Create Kurikulum', 'url'=>array('create')),
	array('label'=>'View Kurikulum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kurikulum', 'url'=>array('admin')),
);
?>

<h1>Update Kurikulum <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>