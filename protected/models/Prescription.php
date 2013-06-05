<?php

/**
 * This is the model class for table "prescription".
 *
 * The followings are the available columns in table 'prescription':
 * @property integer $idPrescription
 * @property string $Pre_Drug
 * @property string $Pre_Dose
 * @property integer $Record_idRecord
 *
 * The followings are the available model relations:
 * @property Record $recordIdRecord
 */
class Prescription extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prescription the static model class
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
		return 'prescription';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Record_idRecord', 'required'),
			array('Record_idRecord', 'numerical', 'integerOnly'=>true),
			array('Pre_Drug, Pre_Dose', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPrescription, Pre_Drug, Pre_Dose, Record_idRecord', 'safe', 'on'=>'search'),
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
			'recordIdRecord' => array(self::BELONGS_TO, 'Record', 'Record_idRecord'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPrescription' => 'Id Prescription',
			'Pre_Drug' => 'Pre Drug',
			'Pre_Dose' => 'Pre Dose',
			'Record_idRecord' => 'Record Id Record',
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

		$criteria->compare('idPrescription',$this->idPrescription);
		$criteria->compare('Pre_Drug',$this->Pre_Drug,true);
		$criteria->compare('Pre_Dose',$this->Pre_Dose,true);
		$criteria->compare('Record_idRecord',$this->Record_idRecord);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}