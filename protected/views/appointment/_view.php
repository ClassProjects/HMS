<?php
/* @var $this AppointmentController */
/* @var $data Appointment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAppointment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAppointment), array('view', 'id'=>$data->idAppointment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('App_DateTime')); ?>:</b>
	<?php echo CHtml::encode($data->App_DateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('App_Room')); ?>:</b>
	<?php echo CHtml::encode($data->App_Room); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Room_idRoom')); ?>:</b>
	<?php echo CHtml::encode($data->Room_idRoom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patient_idPatient')); ?>:</b>
	<?php echo CHtml::encode($data->Patient_idPatient); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doctors_idDoctors')); ?>:</b>
	<?php echo CHtml::encode($data->Doctors_idDoctors); ?>
	<br />


</div>