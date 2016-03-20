<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autores'=>array('index'),
	$model->nome . ' ' . $model->sobrenome=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Autor', 'url'=>array('index')),
	array('label'=>'Create Autor', 'url'=>array('create')),
	array('label'=>'View Autor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Autor', 'url'=>array('admin')),
);
?>

<h1>Update Autor: <?php echo $model->nome . ' ' . $model->sobrenome; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>