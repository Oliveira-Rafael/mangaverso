<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autores'=>array('index'),
	$model->nome . ' ' . $model->sobrenome,
	//$model->id,
);

$this->menu=array(
	array('label'=>'Listar Autor', 'url'=>array('index')),
	array('label'=>'Criar Autor', 'url'=>array('create')),
	array('label'=>'Alterar Autor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Autor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Autor', 'url'=>array('admin')),
);
?>

<h1>Visualizar Autor: <?php echo$model->nome . ' ' . $model->sobrenome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'sobrenome',
	),
)); ?>
