<?php
$this->breadcrumbs=array(
	'Room Types',
);

$this->menu=array(
	array('label'=>'Create RoomType','url'=>array('create')),
	array('label'=>'Manage RoomType','url'=>array('admin')),
);
?>

<h1>Room Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
