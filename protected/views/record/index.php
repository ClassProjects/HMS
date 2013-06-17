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
/*$dataProvider =  new CArrayDataProvider('Record');
$dataProvider->setData($ar);
	
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/
for ($i=0; $i <count($ar) ; $i++) {
	?> <strong>Rec Title: </strong> <?php echo $ar[$i]->Rec_Title ?><br>
	<strong>Red Date: </strong> <?php echo $ar[$i]->Red_Date ?><br>
	<strong>Rec Attachment: </strong> <?php echo $ar[$i]->Rec_Attachment ?><br>
	<strong>Rec Text: </strong> <?php echo $ar[$i]->Rec_Text ?><br>
	<strong>Id Doctor: </strong> <?php echo $ar[$i]->Doctors_idDoctors ?><br>
	<strong>Id Patient: </strong> <?php echo $ar[$i]->Patient_idPatient ?><br><br><br>
	<?php 
}//fin for
}//fin if
?>
