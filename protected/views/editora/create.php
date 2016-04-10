<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Editora', 'url'=>array('index')),
	array('label'=>'Gerenciar Editora', 'url'=>array('admin')),
);
?>

<h1>Criar Editora</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>