<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $idPatient
 * @property string $Pat_Name
 * @property string $Pat_LName
 * @property string $Pat_Address
 * @property string $Pat_Phone
 * @property integer $Users_idUsers
 * @property string $Pat_Birthdate
 * @property string $Pat_Weight
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 * @property Appointment[] $appointments1
 * @property Users $usersIdUsers
 * @property Record[] $records
 * @property Record[] $records1
 */
class Patient extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patient the static model class
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
		return 'patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pat_Name, Pat_LName, Users_idUsers', 'required'),
			array('Users_idUsers', 'numerical', 'integerOnly'=>true),
			array('Pat_Name, Pat_LName, Pat_Address, Pat_Phone, Pat_Weight', 'length', 'max'=>45),
			array('Pat_Birthdate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPatient, Pat_Name, Pat_LName, Pat_Address, Pat_Phone, Users_idUsers, Pat_Birthdate, Pat_Weight', 'safe', 'on'=>'search'),
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
			'appointments' => array(self::HAS_MANY, 'Appointment', 'Patient_idPatient'),
			'appointments1' => array(self::HAS_MANY, 'Appointment', 'Patient_Users_idUsers'),
			'usersIdUsers' => array(self::BELONGS_TO, 'Users', 'Users_idUsers'),
			'records' => array(self::HAS_MANY, 'Record', 'Patient_idPatient'),
			'records1' => array(self::HAS_MANY, 'Record', 'Patient_Users_idUsers'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPatient' => 'Id Patient',
			'Pat_Name' => 'Pat Name',
			'Pat_LName' => 'Pat Lname',
			'Pat_Address' => 'Pat Address',
			'Pat_Phone' => 'Pat Phone',
			'Users_idUsers' => 'Users Id Users',
			'Pat_Birthdate' => 'Pat Birthdate',
			'Pat_Weight' => 'Pat Weight',
		);
	}

	public function setUid($val){
		$this->Users_idUsers = $val;
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */

	public static function getPatientId($id){
		$criteria = new CDbCriteria;
		$criteria->condition = 'Users_idUsers = :userid';
		$criteria->params[':userid'] = $id;
		$rows = self::model()->findAll($criteria); //$rows esta lleno de Objetos tipo 'Users'
		return $rows[0]->idPatient;

	}
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idPatient',$this->idPatient);
		$criteria->compare('Pat_Name',$this->Pat_Name,true);
		$criteria->compare('Pat_LName',$this->Pat_LName,true);
		$criteria->compare('Pat_Address',$this->Pat_Address,true);
		$criteria->compare('Pat_Phone',$this->Pat_Phone,true);
		$criteria->compare('Users_idUsers',$this->Users_idUsers);
		$criteria->compare('Pat_Birthdate',$this->Pat_Birthdate,true);
		$criteria->compare('Pat_Weight',$this->Pat_Weight,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}