<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->idRoom=>array('view','id'=>$model->idRoom),
	'Update',
);

$this->menu=array(
	array('label'=>'List Room', 'url'=>array('index')),
	array('label'=>'Create Room', 'url'=>array('create')),
	array('label'=>'View Room', 'url'=>array('view', 'id'=>$model->idRoom)),
	array('label'=>'Manage Room', 'url'=>array('admin')),
);
?>

<h1>Update Room <?php echo $model->idRoom; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>