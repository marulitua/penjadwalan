<?php
$this->breadcrumbs=array(
	'Ruang Kelases',
);

$this->menu=array(
	array('label'=>'Create RuangKelas','url'=>array('create')),
	array('label'=>'Manage RuangKelas','url'=>array('admin')),
);
?>

<h1>Ruang Kelases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
