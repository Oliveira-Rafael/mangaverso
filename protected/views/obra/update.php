<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Create Obra', 'url'=>array('create')),
	array('label'=>'View Obra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>Update Obra <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>