<?php
/* @var $this AutorObraController */
/* @var $model AutorObra */

$this->breadcrumbs=array(
	'Autor Obras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AutorObra', 'url'=>array('index')),
	array('label'=>'Create AutorObra', 'url'=>array('create')),
	array('label'=>'Update AutorObra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AutorObra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AutorObra', 'url'=>array('admin')),
);
?>

<h1>View AutorObra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'autor_id',
		'obra_id',
	),
)); ?>
