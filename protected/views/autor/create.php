<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autores'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Autor', 'url'=>array('index')),
	array('label'=>'Gerenciar Autor', 'url'=>array('admin')),
);
?>

<h1>Criar Autor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>