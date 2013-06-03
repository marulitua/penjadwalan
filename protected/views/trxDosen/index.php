<?php
/* @var $this TrxDosenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trx Dosens',
);

$this->menu=array(
	array('label'=>'Create TrxDosen', 'url'=>array('create')),
	array('label'=>'Manage TrxDosen', 'url'=>array('admin')),
);
?>

<h1>Trx Dosens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
