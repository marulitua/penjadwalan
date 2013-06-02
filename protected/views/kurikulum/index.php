<?php
/* @var $this KurikulumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kurikulums',
);

$this->menu=array(
	array('label'=>'Create Kurikulum', 'url'=>array('create')),
	array('label'=>'Manage Kurikulum', 'url'=>array('admin')),
);
?>

<h1>Kurikulums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
