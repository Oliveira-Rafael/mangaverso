<?php
/* @var $this PaginaController */
/* @var $model Pagina */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordem'); ?>
		<?php echo $form->textField($model,'ordem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caminho_arquivo'); ?>
		<?php echo $form->textField($model,'caminho_arquivo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_arquivo'); ?>
		<?php echo $form->textField($model,'nome_arquivo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'myme_type'); ?>
		<?php echo $form->textField($model,'myme_type',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tamanho_arquivo'); ?>
		<?php echo $form->textField($model,'tamanho_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capitulo_id'); ?>
		<?php echo $form->textField($model,'capitulo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->