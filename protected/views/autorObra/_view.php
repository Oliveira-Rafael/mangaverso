<?php
/* @var $this AutorObraController */
/* @var $data AutorObra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autor_id')); ?>:</b>
	<?php echo CHtml::encode($data->autor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obra_id')); ?>:</b>
	<?php echo CHtml::encode($data->obra_id); ?>
	<br />


</div>