<?php
/* @var $this TrxDosenController */
/* @var $model TrxDosen */

$this->breadcrumbs=array(
	'Trx Dosens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrxDosen', 'url'=>array('index')),
	array('label'=>'Create TrxDosen', 'url'=>array('create')),
	array('label'=>'Update TrxDosen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TrxDosen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrxDosen', 'url'=>array('admin')),
);
?>

<h1>View TrxDosen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'dosen_id',
                array(
                    'name' => 'dosen_id',
                    'value' => $model->dosen->full_name,
                ),
                array(
                    'name' => 'mata_kuliah',
                    'value' => $model->showMataKuliah(),
                ),
		//'periode_id',
	),
)); ?>
