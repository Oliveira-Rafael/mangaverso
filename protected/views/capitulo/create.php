<?php
/* @var $this CapituloController */
/* @var $model Capitulo */

$this->breadcrumbs=array(
	'Capítulos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Capítulo', 'url'=>array('index')),
	array('label'=>'Gerenciar Capítulo', 'url'=>array('admin')),
);
?>

<h1>Criar Capítulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>