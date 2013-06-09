<?php
/* @var $this AppointmentController */
/* @var $model Appointment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAppointment'); ?>
		<?php echo $form->textField($model,'idAppointment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'App_DateTime'); ?>
		<?php echo $form->textField($model,'App_DateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'App_Room'); ?>
		<?php echo $form->textField($model,'App_Room',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Room_idRoom'); ?>
		<?php echo $form->textField($model,'Room_idRoom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Patient_idPatient'); ?>
		<?php echo $form->textField($model,'Patient_idPatient'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doctors_idDoctors'); ?>
		<?php echo $form->textField($model,'Doctors_idDoctors'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->