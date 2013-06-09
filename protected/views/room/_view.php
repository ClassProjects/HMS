<?php
/* @var $this RoomController */
/* @var $data Room */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRoom')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRoom), array('view', 'id'=>$data->idRoom)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Room_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Room_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Room_Branch')); ?>:</b>
	<?php echo CHtml::encode($data->Room_Branch); ?>
	<br />


</div>