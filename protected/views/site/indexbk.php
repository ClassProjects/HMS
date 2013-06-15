<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>''.CHtml::encode(Yii::app()->name),
)); ?>



<p>Making healthcare <strong>technologically</strong> easier.</p>
<br>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Login',
    'type'=>'inverse', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>Yii::app()->createUrl('site/login'),
)); ?>

<?php $this->endWidget(); ?>

<br><center>

</center>


