<?php

/**
 * This is the model class for table "record".
 *
 * The followings are the available columns in table 'record':
 * @property integer $idRecord
 * @property string $Rec_Title
 * @property string $Red_Date
 * @property string $Rec_Attachment
 * @property string $Rec_Text
 * @property integer $Doctors_idDoctors
 * @property integer $Doctors_Users_idUsers
 * @property integer $Patient_idPatient
 * @property integer $Patient_Users_idUsers
 *
 * The followings are the available model relations:
 * @property Prescription[] $prescriptions
 * @property Doctors $doctorsIdDoctors
 * @property Doctors $doctorsUsersIdUsers
 * @property Patient $patientIdPatient
 * @property Patient $patientUsersIdUsers
 */
class Record extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Record the static model class
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
		return 'record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Doctors_idDoctors, Patient_idPatient', 'required'),
			array('Doctors_idDoctors, Patient_idPatient', 'numerical', 'integerOnly'=>true),
			array('Rec_Title', 'length', 'max'=>45),
			array('Red_Date, Rec_Attachment, Rec_Text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idRecord, Rec_Title, Red_Date, Rec_Attachment, Rec_Text, Doctors_idDoctors, Patient_idPatient', 'safe', 'on'=>'search'),
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
			'prescriptions' => array(self::HAS_MANY, 'Prescription', 'Record_idRecord'),
			'doctorsIdDoctors' => array(self::BELONGS_TO, 'Doctors', 'Doctors_idDoctors'),
			//'doctorsUsersIdUsers' => array(self::BELONGS_TO, 'Doctors', 'Doctors_Users_idUsers'),
			'patientIdPatient' => array(self::BELONGS_TO, 'Patient', 'Patient_idPatient'),
			//'patientUsersIdUsers' => array(self::BELONGS_TO, 'Patient', 'Patient_Users_idUsers'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRecord' => 'Id Record',
			'Rec_Title' => 'Rec Title',
			'Red_Date' => 'Red Date',
			'Rec_Attachment' => 'Rec Attachment',
			'Rec_Text' => 'Rec Text',
			'Doctors_idDoctors' => 'Doctors Id Doctors',
			//'Doctors_Users_idUsers' => 'Doctors Users Id Users',
			'Patient_idPatient' => 'Patient Id Patient',
			//'Patient_Users_idUsers' => 'Patient Users Id Users',
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

		$criteria->compare('idRecord',$this->idRecord);
		$criteria->compare('Rec_Title',$this->Rec_Title,true);
		$criteria->compare('Red_Date',$this->Red_Date,true);
		$criteria->compare('Rec_Attachment',$this->Rec_Attachment,true);
		$criteria->compare('Rec_Text',$this->Rec_Text,true);
		$criteria->compare('Doctors_idDoctors',$this->Doctors_idDoctors);
		//$criteria->compare('Doctors_Users_idUsers',$this->Doctors_Users_idUsers);
		$criteria->compare('Patient_idPatient',$this->Patient_idPatient);
		//$criteria->compare('Patient_Users_idUsers',$this->Patient_Users_idUsers);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}