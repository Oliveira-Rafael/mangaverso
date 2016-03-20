<?php
/* @var $this AutorObraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Autor Obras',
);

$this->menu=array(
	array('label'=>'Create AutorObra', 'url'=>array('create')),
	array('label'=>'Manage AutorObra', 'url'=>array('admin')),
);
?>

<h1>Autor Obras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
