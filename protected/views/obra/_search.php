<?php
/* @var $this ObraController */
/* @var $model Obra */
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
		<?php echo $form->label($model,'obra'); ?>
		<?php echo $form->textField($model,'obra',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_lancamento'); ?>
		<?php echo $form->textField($model,'data_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'editora_id'); ?>
		<?php echo $form->textField($model,'editora_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->