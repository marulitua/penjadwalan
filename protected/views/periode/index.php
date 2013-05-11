<?php
$this->breadcrumbs = array(
    'Periodes',
);

$this->menu = array(
    array('label' => 'Create Periode', 'url' => array('create')),
    array('label' => 'Manage Periode', 'url' => array('admin')),
);
?>

<h1>Periodes</h1>

<?php
$this->widget('bootstrap.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
