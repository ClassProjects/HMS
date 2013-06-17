<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $idUsers
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property integer $Active
 *
 * The followings are the available model relations:
 * @property Doctors[] $doctors
 * @property Patient[] $patients
 */
class Users extends CActiveRecord
{
	public $Confirm;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Username, Email, Password, Confirm', 'required'),
			array('Confirm', 'checkConfirm'), 
			array('idUsers, Active', 'numerical', 'integerOnly'=>true),
			array('Username, Email', 'length', 'max'=>45),
			array('Password', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsers, Username, Password, Email, Active, Admin', 'safe', 'on'=>'search'),
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
			'doctors' => array(self::HAS_MANY, 'Doctors', 'Users_idUsers'),
			'patients' => array(self::HAS_MANY, 'Patient', 'Users_idUsers'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsers' => 'Id Users',
			'Username' => 'Username',
			'Password' => 'Password',
			'Email' => 'Email',
			'Active' => 'Active',
			'Admin' => 'Admin'
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

		$criteria->compare('idUsers',$this->idUsers);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('Admin',$this->Admin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function role($name){ //Devuelve el int de Admin 3=Admin 2=Docs 1=Pats

		if ($name == "Guest") {
			return "Guest";
		} else {
			$criteria = new CDbCriteria;
			$criteria->condition = 'Username = :userid';
			$criteria->params[':userid'] = $name;
			$rows = self::model()->findAll($criteria);
	   		return $rows[0]->Admin;
   		}
   	}

   	public function isAdmin($value){
   		if(Users::role($value) == 3){
   			return true;
   		} else {
   			return false;
   		}
   	}


   	public function getAdmins(){
		$criteria = new CDbCriteria;
		$criteria->condition = 'Admin = 3';
		$rows = self::model()->findAll($criteria); //$rows esta lleno de Objetos tipo 'Users'
		$retVal = array(); //Nuevo arreglo donde tendremos solo los Usernames
		
		for ($i=0; $i < count($rows); $i++) { //For que barre $rows
			$value = $rows[$i]->Username; //$value sostiene el Username del $rows[i]
			array_push($retVal, $value); //Se vuarda $value en $retVal
		}
   		return $retVal; //Se retorna arreglo de Usernames

	}

	   	public function isDoc($value){
   		if(Users::role($value) == 2){
   			return true;
   		} else {
   			return false;
   		}
   	}


   	public function getDocs(){
		$criteria = new CDbCriteria;
		$criteria->condition = 'Admin = 2';
		$rows = self::model()->findAll($criteria); //$rows esta lleno de Objetos tipo 'Users'
		$retVal = array(); //Nuevo arreglo donde tendremos solo los Usernames
		
		for ($i=0; $i < count($rows); $i++) { //For que barre $rows
			$value = $rows[$i]->Username; //$value sostiene el Username del $rows[i]
			array_push($retVal, $value); //Se vuarda $value en $retVal
		}
   		return $retVal; //Se retorna arreglo de Usernames

	}

	   	public function isPat($value){
   		if(Users::role($value) == 1){
   			return true;
   		} else {
   			return false;
   		}
   	}


   	public function getPat(){
		$criteria = new CDbCriteria;
		$criteria->condition = 'Admin = 1';
		$rows = self::model()->findAll($criteria); //$rows esta lleno de Objetos tipo 'Users'
		$retVal = array(); //Nuevo arreglo donde tendremos solo los Usernames
		
		for ($i=0; $i < count($rows); $i++) { //For que barre $rows
			$value = $rows[$i]->Username; //$value sostiene el Username del $rows[i]
			array_push($retVal, $value); //Se vuarda $value en $retVal
		}
   		return $retVal; //Se retorna arreglo de Usernames

	}

	public static function encrypt($value)
        {
            return sha1($value);
        }
        
        public function checkConfirm()
        {
            if($this->Password != $this->Confirm)
            {
                $this->addError('Confirm', 'Passwords fields doesn\'t match');
            }
        }


}