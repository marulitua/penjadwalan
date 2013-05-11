<?php
$this->breadcrumbs=array(
	'Mata Kuliahs',
);

$this->menu=array(
	array('label'=>'Create MataKuliah','url'=>array('create')),
	array('label'=>'Manage MataKuliah','url'=>array('admin')),
);
?>

<h1>Mata Kuliahs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
