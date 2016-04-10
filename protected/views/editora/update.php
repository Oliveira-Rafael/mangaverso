<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	$model->editora=>array('view','id'=>$model->id),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Editora', 'url'=>array('index')),
	array('label'=>'Criar Editora', 'url'=>array('create')),
	array('label'=>'Visualizar Editora', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Editora', 'url'=>array('admin')),
);
?>

<h1>Alterar Editora: <?php echo $model->editora; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>