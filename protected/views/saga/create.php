<?php
/* @var $this SagaController */
/* @var $model Saga */

$this->breadcrumbs=array(
	'Sagas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Saga', 'url'=>array('index')),
	array('label'=>'Manage Saga', 'url'=>array('admin', 'obra_id' => $model->obra_id )), /*exemplo*/
);
?>

<h1>Create Saga - <?= $model->obra->obra ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


