<?php
/* @var $this SagaController */
/* @var $data Saga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saga')); ?>:</b>
	<?php echo CHtml::encode($data->saga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_lancamento')); ?>:</b>
	<?php echo CHtml::encode($data->data_lancamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obra_id')); ?>:</b>
	<?php echo CHtml::encode($data->obra_id); ?>
	<br />


</div>