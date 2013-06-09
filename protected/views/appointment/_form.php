<?php
/* @var $this AppointmentController */
/* @var $model Appointment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'appointment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'App_DateTime'); ?>
		<?php echo $form->textField($model,'App_DateTime'); ?>
		<?php echo $form->error($model,'App_DateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'App_Room'); ?>
		<?php echo $form->textField($model,'App_Room',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'App_Room'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Room_idRoom'); ?>
		<?php echo $form->textField($model,'Room_idRoom'); ?>
		<?php echo $form->error($model,'Room_idRoom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Patient_idPatient'); ?>
		<?php echo $form->textField($model,'Patient_idPatient'); ?>
		<?php echo $form->error($model,'Patient_idPatient'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Doctors_idDoctors'); ?>
		<?php echo $form->textField($model,'Doctors_idDoctors'); ?>
		<?php echo $form->error($model,'Doctors_idDoctors'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->