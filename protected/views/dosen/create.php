<?php
$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dosen','url'=>array('index')),
	array('label'=>'Manage Dosen','url'=>array('admin')),
);
?>

<h1>Create Dosen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>