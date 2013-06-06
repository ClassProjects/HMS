<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>''.CHtml::encode(Yii::app()->name),
)); ?>



<p>Making healthcare <strong>technologically</strong> easier.</p>

<?php $this->endWidget(); ?>
<br><center>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Signup',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>Yii::app()->createUrl('users/signup'),
)); ?>
</center>


