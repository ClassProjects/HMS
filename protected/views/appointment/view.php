<?php
/* @var $this AppointmentController */
/* @var $model Appointment */

$this->breadcrumbs=array(
	'Appointments'=>array('index'),
	$model->idAppointment,
);

$this->menu=array(
	array('label'=>'List Appointment', 'url'=>array('index')),
	array('label'=>'Create Appointment', 'url'=>array('create')),
	array('label'=>'Update Appointment', 'url'=>array('update', 'id'=>$model->idAppointment)),
	array('label'=>'Delete Appointment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAppointment),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Appointment', 'url'=>array('admin')),
);
?>

<h1>View Appointment #<?php echo $model->idAppointment; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAppointment',
		'App_DateTime',
		'App_Room',
		'Room_idRoom',
		'Patient_idPatient',
		'Doctors_idDoctors',
	),
)); ?>
