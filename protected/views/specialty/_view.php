<?php
/* @var $this SpecialtyController */
/* @var $data Specialty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSpecialty')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSpecialty), array('view', 'id'=>$data->idSpecialty)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Spe_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Spe_Name); ?>
	<br />


</div>