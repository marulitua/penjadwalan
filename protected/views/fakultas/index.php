<?php
/* @var $this FakultasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fakultases',
);

$this->menu=array(
	array('label'=>'Create Fakultas', 'url'=>array('create')),
	array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h1>Fakultases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
