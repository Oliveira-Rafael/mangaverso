<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Obra', 'url'=>array('index')),
	array('label'=>'Gerenciar Obra', 'url'=>array('admin')),
);
?>

<h1>Criar Obra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>