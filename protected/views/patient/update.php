<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->idPatient=>array('view','id'=>$model->idPatient),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patient', 'url'=>array('index')),
	array('label'=>'Create Patient', 'url'=>array('create')),
	array('label'=>'View Patient', 'url'=>array('view', 'id'=>$model->idPatient)),
	array('label'=>'Manage Patient', 'url'=>array('admin')),
);
?>

<h1>Update Patient <?php echo $model->idPatient; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>