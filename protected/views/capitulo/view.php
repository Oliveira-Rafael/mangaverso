<?php
/* @var $this CapituloController */
/* @var $model Capitulo */

$this->breadcrumbs=array(
	'Capítulos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Capítulo', 'url'=>array('index')),
	array('label'=>'Criar Capítulo', 'url'=>array('create')),
	array('label'=>'Alterar Capítulo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Capítulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Capítulo', 'url'=>array('admin')),
);
?>

<h1>Visualizar Capítulo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'capitulo',
		'data_lancamento',
		'saga_id',
	),
)); ?>
