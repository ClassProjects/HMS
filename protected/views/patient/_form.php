<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pat_Name'); ?>
		<?php echo $form->textField($model,'Pat_Name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Pat_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pat_LName'); ?>
		<?php echo $form->textField($model,'Pat_LName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Pat_LName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pat_Address'); ?>
		<?php echo $form->textField($model,'Pat_Address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Pat_Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pat_Phone'); ?>
		<?php echo $form->textField($model,'Pat_Phone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Pat_Phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pat_Birthdate'); ?>
		<?php echo $form->textField($model,'Pat_Birthdate'); ?>
		<?php echo $form->error($model,'Pat_Birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pat_Weight'); ?>
		<?php echo $form->textField($model,'Pat_Weight',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Pat_Weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Users_idUsers'); ?>
		<?php echo $form->textField($model,'Users_idUsers'); ?>
		<?php echo $form->error($model,'Users_idUsers'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->