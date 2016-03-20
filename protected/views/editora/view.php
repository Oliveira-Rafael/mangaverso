<?php
/* @var $this EditoraController */
/* @var $model Editora */

$this->breadcrumbs=array(
	'Editoras'=>array('index'),
	$model->editora,
);

$this->menu=array(
	array('label'=>'List Editora', 'url'=>array('index')),
	array('label'=>'Create Editora', 'url'=>array('create')),
	array('label'=>'Update Editora', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Editora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Editora', 'url'=>array('admin')),
);
?>

<h1>View Editora: <?php echo $model->editora; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'editora',
	),
)); ?>
