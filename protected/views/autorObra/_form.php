<?php
/* @var $this AutorObraController */
/* @var $model AutorObra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'autor-obra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'autor_id'); ?>
		<?php echo $form->textField($model,'autor_id'); ?>
		<?php echo $form->error($model,'autor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obra_id'); ?>
		<?php echo $form->textField($model,'obra_id'); ?>
		<?php echo $form->error($model,'obra_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->