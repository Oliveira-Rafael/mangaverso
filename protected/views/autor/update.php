<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autores'=>array('index'),
	$model->nome . ' ' . $model->sobrenome=>array('view','id'=>$model->id),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Autor', 'url'=>array('index')),
	array('label'=>'Criar Autor', 'url'=>array('create')),
	array('label'=>'Visualizar Autor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Autor', 'url'=>array('admin')),
);
?>

<h1>Alterar Autor: <?php echo $model->nome . ' ' . $model->sobrenome; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>