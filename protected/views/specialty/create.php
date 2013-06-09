<?php
/* @var $this SpecialtyController */
/* @var $model Specialty */

$this->breadcrumbs=array(
	'Specialties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Specialty', 'url'=>array('index')),
	array('label'=>'Manage Specialty', 'url'=>array('admin')),
);
?>

<h1>Create Specialty</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>