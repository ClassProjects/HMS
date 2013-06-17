<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>


      
	<?php echo $form->textFieldRow($model, 'Username', array('class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'Email', array('class'=>'span3')); ?>
	<?php echo $form->passwordFieldRow($model, 'Password', array('class'=>'span3')); ?>
	<?php echo $form->passwordFieldRow($model, 'Confirm', array('class'=>'span3')); ?>

