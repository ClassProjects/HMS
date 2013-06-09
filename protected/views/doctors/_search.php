<?php
/* @var $this DoctorsController */
/* @var $model Doctors */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDoctors'); ?>
		<?php echo $form->textField($model,'idDoctors'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_Name'); ?>
		<?php echo $form->textField($model,'Doc_Name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_LName'); ?>
		<?php echo $form->textField($model,'Doc_LName',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_Address'); ?>
		<?php echo $form->textField($model,'Doc_Address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doc_Phone'); ?>
		<?php echo $form->textField($model,'Doc_Phone',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Users_idUsers'); ?>
		<?php echo $form->textField($model,'Users_idUsers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Specialty_idSpecialty'); ?>
		<?php echo $form->textField($model,'Specialty_idSpecialty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->