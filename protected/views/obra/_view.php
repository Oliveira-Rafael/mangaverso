<?php
/* @var $this ObraController */
/* @var $data Obra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obra')); ?>:</b>
	<?php echo CHtml::encode($data->obra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_lancamento')); ?>:</b>
	<?php echo CHtml::encode($data->data_lancamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('editora_id')); ?>:</b>
	<?php echo CHtml::encode($data->editora_id); ?>
	<br />


</div>