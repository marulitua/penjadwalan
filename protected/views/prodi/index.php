<?php
$this->breadcrumbs=array(
	'Prodis',
);

$this->menu=array(
	array('label'=>'Create Prodi','url'=>array('create')),
	array('label'=>'Manage Prodi','url'=>array('admin')),
);
?>

<h1>Prodis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
