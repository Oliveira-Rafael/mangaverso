<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Editora', 'url'=>array('index')),
	array('label'=>'Manage Editora', 'url'=>array('admin')),
);
?>

<h1>Create Editora</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>