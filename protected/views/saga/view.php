<?php
/* @var $this SagaController */
/* @var $model Saga */

$this->breadcrumbs=array(
	'Sagas'=>array('index'),
	$model->saga,
);

$this->menu=array(
	array('label'=>'List Saga', 'url'=>array('index')),
	array('label'=>'Create Saga', 'url'=>array('create')),
	array('label'=>'Update Saga', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Saga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Saga', 'url'=>array('admin')),
	array('label'=>'Manage Capitulo', 'url'=>array('capitulo/admin', 'saga_id' => $model->id)),
);
?>

<h1>View Saga #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'saga',
		'data_lancamento',
		'obra_id',
        'obra.obra',
	),
)); ?>
