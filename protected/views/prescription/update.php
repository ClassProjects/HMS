<?php
/* @var $this PrescriptionController */
/* @var $model Prescription */

$this->breadcrumbs=array(
	'Prescriptions'=>array('index'),
	$model->idPrescription=>array('view','id'=>$model->idPrescription),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prescription', 'url'=>array('index')),
	array('label'=>'Create Prescription', 'url'=>array('create')),
	array('label'=>'View Prescription', 'url'=>array('view', 'id'=>$model->idPrescription)),
	array('label'=>'Manage Prescription', 'url'=>array('admin')),
);
?>

<h1>Update Prescription <?php echo $model->idPrescription; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>