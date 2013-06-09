<?php
/* @var $this RoomController */
/* @var $model Room */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'room-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idRoom'); ?>
		<?php echo $form->textField($model,'idRoom'); ?>
		<?php echo $form->error($model,'idRoom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Room_Name'); ?>
		<?php echo $form->textField($model,'Room_Name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Room_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Room_Branch'); ?>
		<?php echo $form->textField($model,'Room_Branch',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Room_Branch'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->