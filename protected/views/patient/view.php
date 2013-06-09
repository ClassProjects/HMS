<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->idPatient,
);

$this->menu=array(
	array('label'=>'List Patient', 'url'=>array('index')),
	array('label'=>'Create Patient', 'url'=>array('create')),
	array('label'=>'Update Patient', 'url'=>array('update', 'id'=>$model->idPatient)),
	array('label'=>'Delete Patient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPatient),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patient', 'url'=>array('admin')),
);
?>

<h1>View Patient #<?php echo $model->idPatient; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPatient',
		'Pat_Name',
		'Pat_LName',
		'Pat_Address',
		'Pat_Phone',
		'Pat_Birthdate',
		'Pat_Weight',
		'Users_idUsers',
	),
)); ?>
