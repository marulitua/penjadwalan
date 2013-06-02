<?php
/* @var $this KurikulumController */
/* @var $model Kurikulum */

$this->breadcrumbs=array(
	'Kurikulums'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kurikulum', 'url'=>array('index')),
	array('label'=>'Create Kurikulum', 'url'=>array('create')),
	array('label'=>'Update Kurikulum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kurikulum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kurikulum', 'url'=>array('admin')),
);
?>

<h1>View Kurikulum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mata_kuliah_id',
		'jumlah_kelas',
	),
)); ?>
