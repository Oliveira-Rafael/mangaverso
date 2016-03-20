<?php
/* @var $this SagaController */
/* @var $model Saga */

$this->breadcrumbs=array(
	'Sagas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Saga', 'url'=>array('index')),
	array('label'=>'Create Saga', 'url'=>array('create')),
	array('label'=>'View Saga', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Saga', 'url'=>array('admin')),
);
?>

<h1>Update Saga <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>