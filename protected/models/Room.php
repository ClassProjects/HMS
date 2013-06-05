<?php

/**
 * This is the model class for table "room".
 *
 * The followings are the available columns in table 'room':
 * @property integer $idRoom
 * @property string $Room_Name
 * @property string $Room_Branch
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 */
class Room extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Room the static model class
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
		return 'room';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idRoom', 'required'),
			array('idRoom', 'numerical', 'integerOnly'=>true),
			array('Room_Name, Room_Branch', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idRoom, Room_Name, Room_Branch', 'safe', 'on'=>'search'),
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
			'appointments' => array(self::HAS_MANY, 'Appointment', 'Room_idRoom'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRoom' => 'Id Room',
			'Room_Name' => 'Room Name',
			'Room_Branch' => 'Room Branch',
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

		$criteria->compare('idRoom',$this->idRoom);
		$criteria->compare('Room_Name',$this->Room_Name,true);
		$criteria->compare('Room_Branch',$this->Room_Branch,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}