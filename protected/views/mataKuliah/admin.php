<?php
$this->breadcrumbs=array(
	'Mata Kuliahs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MataKuliah','url'=>array('index')),
	array('label'=>'Create MataKuliah','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mata-kuliah-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mata Kuliahs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mata-kuliah-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'mata_kuliah',
		'mata_kuliah_code',
		array(
                  'header' => 'Praktek/Teori',  
                  'name' => 'praktek',  
                  'value' => '$data->praktek == 1 ? \'Praktek\' : \'Teori\' '  
                ),
		'sks',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
