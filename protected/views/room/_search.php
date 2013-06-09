<?php
/* @var $this RoomController */
/* @var $model Room */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idRoom'); ?>
		<?php echo $form->textField($model,'idRoom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Room_Name'); ?>
		<?php echo $form->textField($model,'Room_Name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Room_Branch'); ?>
		<?php echo $form->textField($model,'Room_Branch',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->