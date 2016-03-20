<?php
/* @var $this PaginaController */
/* @var $model Pagina */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagina-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ordem'); ?>
		<?php echo $form->textField($model,'ordem'); ?>
		<?php echo $form->error($model,'ordem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caminho_arquivo'); ?>
		<?php echo $form->textField($model,'caminho_arquivo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'caminho_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_arquivo'); ?>
		<?php echo $form->textField($model,'nome_arquivo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nome_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'myme_type'); ?>
		<?php echo $form->textField($model,'myme_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'myme_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tamanho_arquivo'); ?>
		<?php echo $form->textField($model,'tamanho_arquivo'); ?>
		<?php echo $form->error($model,'tamanho_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capitulo_id'); ?>
		<?php echo $form->textField($model,'capitulo_id'); ?>
		<?php echo $form->error($model,'capitulo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->