<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Listar Obra', 'url'=>array('index')),
	array('label'=>'Criar Obra', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#obra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Obras</h1>

<?php
/*<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>*/
?>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */ ?> <!-- Para não mostrar a Busca Avançada -->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'obra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'columns'=>array(
		'id',
		'obra',
		'data_lancamento',
		array('name' => 'editora_nome', 'value' => 'isset($data->editora->editora) ? $data->editora->editora : ""'), /*Esse é para adicionar a coluna Editora no Manage de Obra*/
		array(
			'class'=>'CButtonColumn',
		),

	),
)); ?>
