<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create a Doctor',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>Yii::app()->createUrl('doctors/create'),
));
 ?>

<br><br>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create a Patient',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>Yii::app()->createUrl('patient/create'),
)); ?>
