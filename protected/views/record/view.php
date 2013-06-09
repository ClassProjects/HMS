<?php
/* @var $this RecordController */
/* @var $model Record */

$this->breadcrumbs=array(
	'Records'=>array('index'),
	$model->idRecord,
);

$this->menu=array(
	array('label'=>'List Record', 'url'=>array('index')),
	array('label'=>'Create Record', 'url'=>array('create')),
	array('label'=>'Update Record', 'url'=>array('update', 'id'=>$model->idRecord)),
	array('label'=>'Delete Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRecord),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>

<h1>View Record #<?php echo $model->idRecord; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idRecord',
		'Rec_Title',
		'Red_Date',
		'Rec_Attachment',
		'Rec_Text',
		'Doctors_idDoctors',
		'Patient_idPatient',
		'Prescription_idPrescription',
	),
)); ?>
