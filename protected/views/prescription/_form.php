<?php
/* @var $this PrescriptionController */
/* @var $model Prescription */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prescription-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pre_Drug'); ?>
		<?php echo $form->textField($model,'Pre_Drug',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Pre_Drug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pre_Dose'); ?>
		<?php echo $form->textField($model,'Pre_Dose',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Pre_Dose'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->