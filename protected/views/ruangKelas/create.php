<?php
/* @var $this RuangKelasController */
/* @var $model RuangKelas */

$this->breadcrumbs=array(
	'Ruang Kelases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RuangKelas', 'url'=>array('index')),
	array('label'=>'Manage RuangKelas', 'url'=>array('admin')),
);
?>

<h1>Create RuangKelas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>