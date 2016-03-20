<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Editora', 'url'=>array('index')),
	array('label'=>'Create Editora', 'url'=>array('create')),
	array('label'=>'View Editora', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Editora', 'url'=>array('admin')),
);
?>

<h1>Update Editora <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>