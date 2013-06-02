<?php
/* @var $this TrxKurikulumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trx Kurikulums',
);

$this->menu=array(
	array('label'=>'Create TrxKurikulum', 'url'=>array('create')),
	array('label'=>'Manage TrxKurikulum', 'url'=>array('admin')),
);
?>

<h1>Trx Kurikulums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
