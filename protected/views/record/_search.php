<?php
/* @var $this RecordController */
/* @var $model Record */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idRecord'); ?>
		<?php echo $form->textField($model,'idRecord'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Rec_Title'); ?>
		<?php echo $form->textField($model,'Rec_Title',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Red_Date'); ?>
		<?php echo $form->textField($model,'Red_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Rec_Attachment'); ?>
		<?php echo $form->textField($model,'Rec_Attachment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Rec_Text'); ?>
		<?php echo $form->textArea($model,'Rec_Text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doctors_idDoctors'); ?>
		<?php echo $form->textField($model,'Doctors_idDoctors'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Patient_idPatient'); ?>
		<?php echo $form->textField($model,'Patient_idPatient'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Prescription_idPrescription'); ?>
		<?php echo $form->textField($model,'Prescription_idPrescription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->