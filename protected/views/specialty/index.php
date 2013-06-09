<?php
/* @var $this SpecialtyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Specialties',
);

$this->menu=array(
	array('label'=>'Create Specialty', 'url'=>array('create')),
	array('label'=>'Manage Specialty', 'url'=>array('admin')),
);
?>

<h1>Specialties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
