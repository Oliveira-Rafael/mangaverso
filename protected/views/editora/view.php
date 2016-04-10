<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	$model->editora,
);

$this->menu=array(
	array('label'=>'Listar Editora', 'url'=>array('index')),
	array('label'=>'Criar Editora', 'url'=>array('create')),
	array('label'=>'Alterar Editora', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Editora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Editora', 'url'=>array('admin')),
);
?>

<h1>Visualizar Editora: <?php echo $model->editora; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'editora',
	),
)); ?>
