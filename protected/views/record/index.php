<?php
/* @var $this RecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Records',
);

$this->menu=array(
	array('label'=>'Create Record', 'url'=>array('create')),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>

<h1>Records</h1>

<?php 
	$ar=array();
	if(!Yii::app()->user->isGuest){
		$ar=Record::getRecords(Patient::getPatientId(Users::getId(Yii::app()->user->name)));

		for ($i=0; $i <count($ar) ; $i++) {
			?>
			<strong>Record Id: </strong> <?php echo CHtml::link(CHtml::encode($ar[$i]->idRecord), array('view', 'id'=>$ar[$i]->idRecord)); ?><br> 
			<strong>Rec Title: </strong> <?php echo $ar[$i]->Rec_Title ?><br>
			<strong>Red Date: </strong> <?php echo $ar[$i]->Red_Date ?><br>
			<strong>Rec Text: </strong> <?php echo $ar[$i]->Rec_Text ?><br><br><br>
	
			<?php 
		}//fin for
	}//fin if
?>
