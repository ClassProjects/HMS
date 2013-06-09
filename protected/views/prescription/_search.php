<?php
/* @var $this PrescriptionController */
/* @var $model Prescription */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPrescription'); ?>
		<?php echo $form->textField($model,'idPrescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pre_Drug'); ?>
		<?php echo $form->textField($model,'Pre_Drug',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pre_Dose'); ?>
		<?php echo $form->textField($model,'Pre_Dose',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->