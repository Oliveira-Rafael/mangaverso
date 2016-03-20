<?php
/* @var $this PaginaController */
/* @var $model Pagina */

$this->breadcrumbs=array(
	'Paginas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pagina', 'url'=>array('index')),
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'Update Pagina', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pagina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
?>

<h1>View Pagina #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ordem',
		'caminho_arquivo',
		'nome_arquivo',
		'myme_type',
		'tamanho_arquivo',
		'capitulo_id',
	),
)); ?>
