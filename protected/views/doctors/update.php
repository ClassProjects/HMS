<?php
/* @var $this DoctorsController */
/* @var $model Doctors */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	$model->idDoctors=>array('view','id'=>$model->idDoctors),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctors', 'url'=>array('index')),
	array('label'=>'Create Doctors', 'url'=>array('create')),
	array('label'=>'View Doctors', 'url'=>array('view', 'id'=>$model->idDoctors)),
	array('label'=>'Manage Doctors', 'url'=>array('admin')),
);
?>

<h1>Update Doctors <?php echo $model->idDoctors; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>