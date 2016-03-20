<?php
/* @var $this EditoraController */
/* @var $data Editora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('editora')); ?>:</b>
	<?php echo CHtml::encode($data->editora); ?>
	<br />


</div>