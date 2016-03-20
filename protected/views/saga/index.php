<?php
/* @var $this SagaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sagas',
);

$this->menu=array(
	array('label'=>'Create Saga', 'url'=>array('create')),
	array('label'=>'Manage Saga', 'url'=>array('admin')),
);
?>

<h1>Sagas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
