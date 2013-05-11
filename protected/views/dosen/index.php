<?php
$this->breadcrumbs=array(
	'Dosens',
);

$this->menu=array(
	array('label'=>'Create Dosen','url'=>array('create')),
	array('label'=>'Manage Dosen','url'=>array('admin')),
);
?>

<h1>Dosens</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
