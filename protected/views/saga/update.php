<?php
/* @var $this SagaController */
/* @var $model Saga */

$this->breadcrumbs=array(
	'Sagas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Saga', 'url'=>array('index')),
	array('label'=>'Criar Saga', 'url'=>array('create')),
	array('label'=>'Visualizar Saga', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Saga', 'url'=>array('admin')),
);
?>

<h1>Alterar Saga <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>