<?php
/* @var $this RecordController */
/* @var $model Record */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'record-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rec_Title'); ?>
		<?php echo $form->textField($model,'Rec_Title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Rec_Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Red_Date'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
   			 'model' => $model,
   			 'attribute' => 'Red_Date',
   			 'options' => array(
   			 	'dateFormat' => 'yy-mm-dd', 
   			 	),
   			 'htmlOptions' => array(
   			     'size' => '10',         // textField size
   			     'maxlength' => '10',    // textField maxlength
    			),
));
?>
		<?php echo $form->error($model,'Red_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rec_Attachment'); ?>
		<?php echo $form->textField($model,'Rec_Attachment'); ?>
		<?php echo $form->error($model,'Rec_Attachment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rec_Text'); ?>
		<?php echo $form->textArea($model,'Rec_Text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Rec_Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Doctors_idDoctors'); ?>
		<?php echo $form->textField($model,'Doctors_idDoctors'); ?>
		<?php echo $form->error($model,'Doctors_idDoctors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Patient_idPatient'); ?>
		<?php echo $form->textField($model,'Patient_idPatient'); ?>
		<?php echo $form->error($model,'Patient_idPatient'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Prescription_idPrescription'); ?>
		<?php echo $form->textField($model,'Prescription_idPrescription'); ?>
		<?php echo $form->error($model,'Prescription_idPrescription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->