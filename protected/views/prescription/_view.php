<?php
/* @var $this PrescriptionController */
/* @var $data Prescription */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPrescription')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPrescription), array('view', 'id'=>$data->idPrescription)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pre_Drug')); ?>:</b>
	<?php echo CHtml::encode($data->Pre_Drug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pre_Dose')); ?>:</b>
	<?php echo CHtml::encode($data->Pre_Dose); ?>
	<br />


</div>