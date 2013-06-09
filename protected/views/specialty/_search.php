<?php
/* @var $this SpecialtyController */
/* @var $model Specialty */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSpecialty'); ?>
		<?php echo $form->textField($model,'idSpecialty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Spe_Name'); ?>
		<?php echo $form->textField($model,'Spe_Name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->