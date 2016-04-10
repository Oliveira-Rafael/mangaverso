<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->obra, //Para aparecer  Home » Obras » "Dragon Ball"
);

$this->menu=array(
	array('label'=>'Listar Obra', 'url'=>array('index')),
	array('label'=>'Criar Obra', 'url'=>array('create')),
	array('label'=>'Alterar Obra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Obra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Obra', 'url'=>array('admin')),
	array('label'=>'Gerenciar Saga', 'url'=>array('saga/admin', 'obra_id' => $model->id)),
);
?>

<h1>Visualizar Obra: <?php echo $model->obra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'obra',
		'data_lancamento',
		'editora.editora', //editora->editora ... segundo editora = nome da editora*/
		array('label' => 'Autor', 'value' => $model->autorObras[0]->autor->nome . ' ' . $model->autorObras[0]->autor->sobrenome)
	),

)); ?>
