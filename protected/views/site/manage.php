<div class="hero-unit">
	<h2>Need a Doctor?</h2>
  <?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create a Doctor',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>Yii::app()->createUrl('doctors/create'),
));
 ?>
</div>
<br>
<div class="hero-unit">
	<h2>Need a Patient?</h2>
  <?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create a Patient',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
    'url'=>Yii::app()->createUrl('patient/create'),
)); ?>
</div>

