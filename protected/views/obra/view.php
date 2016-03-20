<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Create Obra', 'url'=>array('create')),
	array('label'=>'Update Obra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Obra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
	array('label'=>'Manage Saga', 'url'=>array('saga/admin', 'obra_id' => $model->id)),
);
?>

<h1>View Obra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'obra',
		'data_lancamento',
		'editora.editora', //editora->editora ... segundo editora = nome da editora
		array('label' => 'Autor', 'value' => $model->autorObras[0]->autor->nome . ' ' . $model->autorObras[0]->autor->sobrenome)
	),
)); ?>
