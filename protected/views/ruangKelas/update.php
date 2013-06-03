<?php
/* @var $this RuangKelasController */
/* @var $model RuangKelas */

$this->breadcrumbs=array(
	'Ruang Kelases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RuangKelas', 'url'=>array('index')),
	array('label'=>'Create RuangKelas', 'url'=>array('create')),
	array('label'=>'View RuangKelas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RuangKelas', 'url'=>array('admin')),
);
?>

<h1>Update RuangKelas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>