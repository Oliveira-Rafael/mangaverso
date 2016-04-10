<?php
/* @var $this SagaController */
/* @var $model Saga */

$this->breadcrumbs=array(
	'Sagas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Saga', 'url'=>array('index')),
	array('label'=>'Gerenciar Saga', 'url'=>array('admin', 'obra_id' => $model->obra_id )), /*exemplo*/
);
?>

<h1>Criar Saga - <?= $model->obra->obra ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


