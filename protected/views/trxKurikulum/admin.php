<?php
/* @var $this TrxKurikulumController */
/* @var $model TrxKurikulum */

$this->breadcrumbs=array(
	'Trx Kurikulums'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TrxKurikulum', 'url'=>array('index')),
	array('label'=>'Create TrxKurikulum', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trx-kurikulum-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Trx Kurikulums</h1>

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

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'trx-kurikulum-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
//		'mata_kuliah_id',
                array(
                    'name' => 'mata_kuliah_id',
                    'header' => 'Mata Kuliah',
                    'value' => '$data->mataKuliah->mata_kuliah',
                ),
                array(
                    'header' => 'Day',
                    'name' => 'day',
                    'value' => '$data->findDay()',
                ),
                array(
                    'header' => 'Ruang Kelas',
                    'name' => 'ruang_kelas',
                    'value' => '$data->findRoom()',
                ),
		'jumlah_kelas',
//		'periode_id',
		array(
			'class'=>'CButtonColumn',
                        'htmlOptions' => array(
                          'width' => 100,  
                        ),
		),
	),
)); ?>
