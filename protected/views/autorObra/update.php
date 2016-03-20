<?php
/* @var $this AutorObraController */
/* @var $model AutorObra */

$this->breadcrumbs=array(
	'Autor Obras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AutorObra', 'url'=>array('index')),
	array('label'=>'Create AutorObra', 'url'=>array('create')),
	array('label'=>'View AutorObra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AutorObra', 'url'=>array('admin')),
);
?>

<h1>Update AutorObra <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>