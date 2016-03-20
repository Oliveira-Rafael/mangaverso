<?php
/* @var $this AutorObraController */
/* @var $model AutorObra */

$this->breadcrumbs=array(
	'Autor Obras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AutorObra', 'url'=>array('index')),
	array('label'=>'Manage AutorObra', 'url'=>array('admin')),
);
?>

<h1>Create AutorObra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>