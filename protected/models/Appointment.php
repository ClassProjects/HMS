<?php

/**
 * This is the model class for table "appointment".
 *
 * The followings are the available columns in table 'appointment':
 * @property integer $idAppointment
 * @property string $App_DateTime
 * @property string $App_Room
 * @property integer $Patient_idPatient
 * @property integer $Patient_Users_idUsers
 * @property integer $Doctors_idDoctors
 * @property integer $Doctors_Users_idUsers
 * @property integer $Room_idRoom
 *
 * The followings are the available model relations:
 * @property Patient $patientIdPatient
 * @property Patient $patientUsersIdUsers
 * @property Doctors $doctorsIdDoctors
 * @property Doctors $doctorsUsersIdUsers
 * @property Room $roomIdRoom
 */
class Appointment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Appointment the static model class
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
		return 'appointment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Patient_idPatient, Patient_Users_idUsers, Doctors_idDoctors, Doctors_Users_idUsers, Room_idRoom', 'required'),
			array('Patient_idPatient, Patient_Users_idUsers, Doctors_idDoctors, Doctors_Users_idUsers, Room_idRoom', 'numerical', 'integerOnly'=>true),
			array('App_Room', 'length', 'max'=>45),
			array('App_DateTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idAppointment, App_DateTime, App_Room, Patient_idPatient, Patient_Users_idUsers, Doctors_idDoctors, Doctors_Users_idUsers, Room_idRoom', 'safe', 'on'=>'search'),
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
			'patientIdPatient' => array(self::BELONGS_TO, 'Patient', 'Patient_idPatient'),
			'patientUsersIdUsers' => array(self::BELONGS_TO, 'Patient', 'Patient_Users_idUsers'),
			'doctorsIdDoctors' => array(self::BELONGS_TO, 'Doctors', 'Doctors_idDoctors'),
			'doctorsUsersIdUsers' => array(self::BELONGS_TO, 'Doctors', 'Doctors_Users_idUsers'),
			'roomIdRoom' => array(self::BELONGS_TO, 'Room', 'Room_idRoom'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAppointment' => 'Id Appointment',
			'App_DateTime' => 'App Date Time',
			'App_Room' => 'App Room',
			'Patient_idPatient' => 'Patient Id Patient',
			'Patient_Users_idUsers' => 'Patient Users Id Users',
			'Doctors_idDoctors' => 'Doctors Id Doctors',
			'Doctors_Users_idUsers' => 'Doctors Users Id Users',
			'Room_idRoom' => 'Room Id Room',
		);
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

		$criteria->compare('idAppointment',$this->idAppointment);
		$criteria->compare('App_DateTime',$this->App_DateTime,true);
		$criteria->compare('App_Room',$this->App_Room,true);
		$criteria->compare('Patient_idPatient',$this->Patient_idPatient);
		$criteria->compare('Patient_Users_idUsers',$this->Patient_Users_idUsers);
		$criteria->compare('Doctors_idDoctors',$this->Doctors_idDoctors);
		$criteria->compare('Doctors_Users_idUsers',$this->Doctors_Users_idUsers);
		$criteria->compare('Room_idRoom',$this->Room_idRoom);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}