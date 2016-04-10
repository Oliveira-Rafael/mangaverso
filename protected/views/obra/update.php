<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->obra=>array('view','id'=>$model->id),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Obra', 'url'=>array('index')),
	array('label'=>'Criar Obra', 'url'=>array('create')),
	array('label'=>'Visualizar Obra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Obra', 'url'=>array('admin')),
);
?>

<h1>Alterar Obra: <?php echo $model->obra; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>