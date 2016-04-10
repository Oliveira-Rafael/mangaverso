<?php
/* @var $this ObraController */
/* @var $model Obra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'obra'); ?>
		<?php echo $form->textField($model,'obra',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'obra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_lancamento'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model' => $model,
				'language' => 'pt-BR',
				'attribute' => 'data_lancamento',
				'htmlOptions'=>array('readonly' => true)
			)
		); ?>
		<?php echo $form->error($model,'data_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'editora_id'); ?>
		<?php //echo $form->textField($model,'editora_id'); ?>
		<?php echo $form->dropDownList($model, 'editora_id', Editora::model()->listarDados(), array('empty' => 'Selecione')) ?>
		<?php echo $form->error($model,'editora_id'); ?>
	</div>

	<div class="row">
		<?= CHtml::label('Autor', 'autor_id_0') ?>
		<?= CHtml::dropDownList('autor_id_0', isset($model->autorObras[0]) ? $model->autorObras[0]->autor->id: '', Autor::model()->listarDados(), array('empty' => 'Selecione')) ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->