<?php

/**
 * This is the model class for table "doctors".
 *
 * The followings are the available columns in table 'doctors':
 * @property integer $idDoctors
 * @property string $Doc_Name
 * @property string $Doc_LName
 * @property string $Doc_Address
 * @property string $Doc_Phone
 * @property integer $Users_idUsers
 * @property integer $Specialty_idSpecialty
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 * @property Appointment[] $appointments1
 * @property Specialty $specialtyIdSpecialty
 * @property Record[] $records
 * @property Record[] $records1
 */
class Doctors extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Doctors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'doctors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Doc_Name, Doc_LName, Users_idUsers, Specialty_idSpecialty', 'required'),
			array('Users_idUsers, Specialty_idSpecialty', 'numerical', 'integerOnly'=>true),
			array('Doc_Name, Doc_LName, Doc_Address, Doc_Phone', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idDoctors, Doc_Name, Doc_LName, Doc_Address, Doc_Phone, Users_idUsers, Specialty_idSpecialty', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'appointments' => array(self::HAS_MANY, 'Appointment', 'Doctors_idDoctors'),
			//'appointments1' => array(self::HAS_MANY, 'Appointment', 'Doctors_Users_idUsers'),
			'specialtyIdSpecialty' => array(self::BELONGS_TO, 'Specialty', 'Specialty_idSpecialty'),
			'records' => array(self::HAS_MANY, 'Record', 'Doctors_idDoctors'),
			//'records1' => array(self::HAS_MANY, 'Record', 'Doctors_Users_idUsers'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDoctors' => 'Id Doctors',
			'Doc_Name' => 'Doc Name',
			'Doc_LName' => 'Doc Lname',
			'Doc_Address' => 'Doc Address',
			'Doc_Phone' => 'Doc Phone',
			'Users_idUsers' => 'Users Id Users',
			'Specialty_idSpecialty' => 'Specialty Id Specialty',
			
		);
	}

	public static function getDoctorId($id){
		$criteria = new CDbCriteria;
		$criteria->condition = 'Users_idUsers = :userid';
		$criteria->params[':userid'] = $id;
		$rows = self::model()->findAll($criteria); //$rows esta lleno de Objetos tipo 'Users'
		return $rows[0]->idDoctors;

	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idDoctors',$this->idDoctors);
		$criteria->compare('Doc_Name',$this->Doc_Name,true);
		$criteria->compare('Doc_LName',$this->Doc_LName,true);
		$criteria->compare('Doc_Address',$this->Doc_Address,true);
		$criteria->compare('Doc_Phone',$this->Doc_Phone,true);
		$criteria->compare('Users_idUsers',$this->Users_idUsers);
		$criteria->compare('Specialty_idSpecialty',$this->Specialty_idSpecialty);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}