<?php
/* @var $this CapituloController */
/* @var $data Capitulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capitulo')); ?>:</b>
	<?php echo CHtml::encode($data->capitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_lancamento')); ?>:</b>
	<?php echo CHtml::encode($data->data_lancamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saga_id')); ?>:</b>
	<?php echo CHtml::encode($data->saga_id); ?>
	<br />


</div>