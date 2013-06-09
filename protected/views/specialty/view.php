<?php
/* @var $this SpecialtyController */
/* @var $model Specialty */

$this->breadcrumbs=array(
	'Specialties'=>array('index'),
	$model->idSpecialty,
);

$this->menu=array(
	array('label'=>'List Specialty', 'url'=>array('index')),
	array('label'=>'Create Specialty', 'url'=>array('create')),
	array('label'=>'Update Specialty', 'url'=>array('update', 'id'=>$model->idSpecialty)),
	array('label'=>'Delete Specialty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSpecialty),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Specialty', 'url'=>array('admin')),
);
?>

<h1>View Specialty #<?php echo $model->idSpecialty; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSpecialty',
		'Spe_Name',
	),
)); ?>
