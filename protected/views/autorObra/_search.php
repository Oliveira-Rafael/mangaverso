<?php
/* @var $this AutorObraController */
/* @var $model AutorObra */
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
		<?php echo $form->label($model,'autor_id'); ?>
		<?php echo $form->textField($model,'autor_id'); ?>
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