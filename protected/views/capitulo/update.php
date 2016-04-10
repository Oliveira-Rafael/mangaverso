<?php
/* @var $this CapituloController */
/* @var $model Capitulo */

$this->breadcrumbs=array(
	'Capítulos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Capítulo', 'url'=>array('index')),
	array('label'=>'Criar Capítulo', 'url'=>array('create')),
	array('label'=>'Visualizar Capítulo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Capítulo', 'url'=>array('admin')),
);
?>

<h1>Alterar Capítulo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>