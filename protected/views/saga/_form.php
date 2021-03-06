<?php
/* @var $this SagaController */
/* @var $model Saga */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'saga-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'saga'); ?>
		<?php echo $form->textField($model,'saga',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'saga'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->