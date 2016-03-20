<?php
/* @var $this SagaController */
/* @var $model Saga */
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
		<?php echo $form->label($model,'saga'); ?>
		<?php echo $form->textField($model,'saga',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_lancamento'); ?>
		<?php echo $form->textField($model,'data_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obra_id'); ?>
		<?php echo $form->textField($model,'obra_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->