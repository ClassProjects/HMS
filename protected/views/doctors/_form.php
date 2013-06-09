<?php
/* @var $this DoctorsController */
/* @var $model Doctors */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctors-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Doc_Name'); ?>
		<?php echo $form->textField($model,'Doc_Name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Doc_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Doc_LName'); ?>
		<?php echo $form->textField($model,'Doc_LName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Doc_LName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Doc_Address'); ?>
		<?php echo $form->textField($model,'Doc_Address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Doc_Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Doc_Phone'); ?>
		<?php echo $form->textField($model,'Doc_Phone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Doc_Phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Users_idUsers'); ?>
		<?php echo $form->textField($model,'Users_idUsers'); ?>
		<?php echo $form->error($model,'Users_idUsers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Specialty_idSpecialty'); ?>
		<?php echo $form->textField($model,'Specialty_idSpecialty'); ?>
		<?php echo $form->error($model,'Specialty_idSpecialty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->