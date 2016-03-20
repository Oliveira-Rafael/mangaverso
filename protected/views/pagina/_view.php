<?php
/* @var $this PaginaController */
/* @var $data Pagina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordem')); ?>:</b>
	<?php echo CHtml::encode($data->ordem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caminho_arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->caminho_arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->nome_arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('myme_type')); ?>:</b>
	<?php echo CHtml::encode($data->myme_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamanho_arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->tamanho_arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capitulo_id')); ?>:</b>
	<?php echo CHtml::encode($data->capitulo_id); ?>
	<br />


</div>