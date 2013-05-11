<?php
$this->breadcrumbs=array(
	'Mata Kuliahs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MataKuliah','url'=>array('index')),
	array('label'=>'Create MataKuliah','url'=>array('create')),
	array('label'=>'View MataKuliah','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MataKuliah','url'=>array('admin')),
);
?>

<h1>Update MataKuliah <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>