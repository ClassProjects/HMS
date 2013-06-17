<?php
/* @var $this RecordController */
/* @var $data Record */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRecord')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRecord), array('view', 'id'=>$data->idRecord)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rec_Title')); ?>:</b>
	<?php echo CHtml::encode($data->Rec_Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Red_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Red_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rec_Attachment')); ?>:</b>
	<?php echo CHtml::encode($data->Rec_Attachment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rec_Text')); ?>:</b>
	<?php echo CHtml::encode($data->Rec_Text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doctors_idDoctors')); ?>:</b>
	<?php echo CHtml::encode($data->Doctors_idDoctors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patient_idPatient')); ?>:</b>
	<?php echo CHtml::encode($data->Patient_idPatient); ?>
	<br />

	<br><?php echo CHtml::form('','post',array('enctype'=>'multipart/form-data')); ?>
	<?php echo CHtml::activeFileField($model, 'image'); ?>
	<?php echo CHtml::endForm(); ?>
	</br>

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Prescription_idPrescription')); ?>:</b>
	<?php echo CHtml::encode($data->Prescription_idPrescription); ?>
	<br />

	*/ ?>

</div>