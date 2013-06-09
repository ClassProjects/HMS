<?php
/* @var $this DoctorsController */
/* @var $data Doctors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDoctors')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDoctors), array('view', 'id'=>$data->idDoctors)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_LName')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_LName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_Address')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doc_Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Doc_Phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Users_idUsers')); ?>:</b>
	<?php echo CHtml::encode($data->Users_idUsers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Specialty_idSpecialty')); ?>:</b>
	<?php echo CHtml::encode($data->Specialty_idSpecialty); ?>
	<br />


</div>