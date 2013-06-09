<?php
/* @var $this PatientController */
/* @var $data Patient */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPatient')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPatient), array('view', 'id'=>$data->idPatient)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pat_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Pat_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pat_LName')); ?>:</b>
	<?php echo CHtml::encode($data->Pat_LName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pat_Address')); ?>:</b>
	<?php echo CHtml::encode($data->Pat_Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pat_Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Pat_Phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pat_Birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->Pat_Birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pat_Weight')); ?>:</b>
	<?php echo CHtml::encode($data->Pat_Weight); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Users_idUsers')); ?>:</b>
	<?php echo CHtml::encode($data->Users_idUsers); ?>
	<br />

	*/ ?>

</div>