<?php
/* @var $this CapituloController */
/* @var $model Capitulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capitulo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'capitulo'); ?>
		<?php echo $form->textField($model,'capitulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'capitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_lancamento'); ?>
		<?php echo $form->textField($model,'data_lancamento'); ?>
		<?php echo $form->error($model,'data_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saga_id'); ?>
		<?php echo $form->textField($model,'saga_id'); ?>
		<?php echo $form->error($model,'saga_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->