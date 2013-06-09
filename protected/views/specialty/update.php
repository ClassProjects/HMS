<?php
/* @var $this SpecialtyController */
/* @var $model Specialty */

$this->breadcrumbs=array(
	'Specialties'=>array('index'),
	$model->idSpecialty=>array('view','id'=>$model->idSpecialty),
	'Update',
);

$this->menu=array(
	array('label'=>'List Specialty', 'url'=>array('index')),
	array('label'=>'Create Specialty', 'url'=>array('create')),
	array('label'=>'View Specialty', 'url'=>array('view', 'id'=>$model->idSpecialty)),
	array('label'=>'Manage Specialty', 'url'=>array('admin')),
);
?>

<h1>Update Specialty <?php echo $model->idSpecialty; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>