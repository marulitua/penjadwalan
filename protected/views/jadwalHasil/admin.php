<?php
/* @var $this JadwalHasilController */
/* @var $model JadwalHasil */

$this->breadcrumbs=array(
	'Jadwal Hasils'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JadwalHasil', 'url'=>array('index')),
	array('label'=>'Create JadwalHasil', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jadwal-hasil-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jadwal Hasils</h1>

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
	'id'=>'jadwal-hasil-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'dosen_id',
                array(
                  'name' => 'dosen_id',  
                  'header' => 'Dosen',  
                  'value' => '$data->dosen->full_name',  
                ),
            	//'ruang_id',
                array(
                  'name' => 'ruang_id',  
                  'header' => 'Ruang Kelas',  
                  'value' => '$data->ruang->number',  
                ),
		//'matakuliah_id',
                array(
                  'name' => 'matakuliah_id',  
                  'header' => 'matakuliah_id',  
                  'value' => '$data->matakuliah->mata_kuliah',  
                ),
		//'day_id',
                array(
                  'name' => 'day_id',  
                  'header' => 'Hari',  
                  'value' => '$data->day->day',  
                ),
		'start_time',
		'end_time',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
