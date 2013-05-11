<?php
$this->breadcrumbs=array(
	'Mata Kuliahs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MataKuliah','url'=>array('index')),
	array('label'=>'Manage MataKuliah','url'=>array('admin')),
);
?>

<h1>Create MataKuliah</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>