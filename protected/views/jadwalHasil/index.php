<?php
/* @var $this JadwalHasilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwal Hasils',
);

$this->menu=array(
	array('label'=>'Create JadwalHasil', 'url'=>array('create')),
	array('label'=>'Manage JadwalHasil', 'url'=>array('admin')),
);
?>

<h1>Jadwal Hasils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
