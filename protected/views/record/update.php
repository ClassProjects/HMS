<?php
/* @var $this RecordController */
/* @var $model Record */

$this->breadcrumbs=array(
	'Records'=>array('index'),
	$model->idRecord=>array('view','id'=>$model->idRecord),
	'Update',
);

$this->menu=array(
	array('label'=>'List Record', 'url'=>array('index')),
	array('label'=>'Create Record', 'url'=>array('create')),
	array('label'=>'View Record', 'url'=>array('view', 'id'=>$model->idRecord)),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>

<h1>Update Record <?php echo $model->idRecord; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>