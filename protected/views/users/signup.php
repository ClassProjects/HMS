<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

	<p>dsvksdv sdcksd ck sdc ks dc skdck skdc skd ck sdk cks dkcsdk cs dc sd cks dck sdk cs dck sk dc sk cs dck skd cks dkcmskdcmksd ckdscksdmckmdkc skdcmkdmckd ckmsdkc skd cksdmck dkc skmdcksd ck sdckm sdckmskdc kd ckmsdc</p>

<?php /** @var BootActiveForm $form */


$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>

	<?php echo $form->errorSummary($model); ?>
        
      
	<?php echo $form->textFieldRow($model, 'Username', array('class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model, 'Email', array('class'=>'span3')); ?>
	<?php echo $form->passwordFieldRow($model, 'Password', array('class'=>'span3')); ?>
	<?php echo $form->passwordFieldRow($model, 'Confirm', array('class'=>'span3')); ?>

        <div>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Register')); ?>
        </div>
<?php $this->endWidget(); ?>

</div><!-- form -->