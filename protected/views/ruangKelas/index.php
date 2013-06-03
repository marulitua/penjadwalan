<?php
/* @var $this RuangKelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ruang Kelases',
);

$this->menu=array(
	array('label'=>'Create RuangKelas', 'url'=>array('create')),
	array('label'=>'Manage RuangKelas', 'url'=>array('admin')),
);
?>

<h1>Ruang Kelases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
