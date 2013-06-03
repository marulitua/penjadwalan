<?php
/* @var $this TrxDosenController */
/* @var $model TrxDosen */

$this->breadcrumbs=array(
	'Trx Dosens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TrxDosen', 'url'=>array('index')),
	array('label'=>'Create TrxDosen', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trx-dosen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Trx Dosens</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trx-dosen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'dosen_id',
                array(
                    'name' => 'dosen_id',
                    'header' => 'Dosen',
                    'value' => '$data->dosen->full_name',
                ),
                array(
                    'name' => 'mata_kuliah',
                    'header' => 'Mata Kuliah',
                    'value' => '$data->showMataKuliah()',
                ),
		//'periode_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
