<?php
/* @var $this DoctorsController */
/* @var $model Doctors */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->idDoctors,
);

$this->menu=array(
	array('label'=>'List Doctors', 'url'=>array('index')),
	array('label'=>'Create Doctors', 'url'=>array('create')),
	array('label'=>'Update Doctors', 'url'=>array('update', 'id'=>$model->idDoctors)),
	array('label'=>'Delete Doctors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDoctors),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctors', 'url'=>array('admin')),
);
?>

<h1>View Doctors #<?php echo $model->idDoctors; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDoctors',
		'Doc_Name',
		'Doc_LName',
		'Doc_Address',
		'Doc_Phone',
		'Users_idUsers',
		'Specialty_idSpecialty',
	),
)); ?>
