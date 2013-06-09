<?php
/* @var $this AppointmentController */
/* @var $model Appointment */

$this->breadcrumbs=array(
	'Appointments'=>array('index'),
	$model->idAppointment=>array('view','id'=>$model->idAppointment),
	'Update',
);

$this->menu=array(
	array('label'=>'List Appointment', 'url'=>array('index')),
	array('label'=>'Create Appointment', 'url'=>array('create')),
	array('label'=>'View Appointment', 'url'=>array('view', 'id'=>$model->idAppointment)),
	array('label'=>'Manage Appointment', 'url'=>array('admin')),
);
?>

<h1>Update Appointment <?php echo $model->idAppointment; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>