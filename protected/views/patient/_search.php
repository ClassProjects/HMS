<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPatient'); ?>
		<?php echo $form->textField($model,'idPatient'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pat_Name'); ?>
		<?php echo $form->textField($model,'Pat_Name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pat_LName'); ?>
		<?php echo $form->textField($model,'Pat_LName',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pat_Address'); ?>
		<?php echo $form->textField($model,'Pat_Address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pat_Phone'); ?>
		<?php echo $form->textField($model,'Pat_Phone',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pat_Birthdate'); ?>
		<?php echo $form->textField($model,'Pat_Birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pat_Weight'); ?>
		<?php echo $form->textField($model,'Pat_Weight',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Users_idUsers'); ?>
		<?php echo $form->textField($model,'Users_idUsers'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->