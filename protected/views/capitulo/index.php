<?php
/* @var $this CapituloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Capítulos',
);

$this->menu=array(
	array('label'=>'Criar Capítulo', 'url'=>array('create')),
	array('label'=>'Gerenciar Capítulo', 'url'=>array('admin')),
);
?>

<h1>Capítulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
