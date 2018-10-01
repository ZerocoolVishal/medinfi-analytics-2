<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $mobile
 * @property string $password
 * @property string $userType
 * @property integer $lastUpdateBy
 * @property string $lastUpdateTime
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Client[] $clients
 * @property Project[] $projects
 * @property Users $lastUpdateBy0
 * @property Users[] $users
 */
class Users extends CActiveRecord
{
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
			array('email, name, mobile, password, userType, lastUpdateBy, lastUpdateTime', 'required'),
			array('lastUpdateBy', 'numerical', 'integerOnly'=>true),
			array('email, name, password', 'length', 'max'=>100),
			array('mobile', 'length', 'max'=>15),
			array('userType', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, name, mobile, password, userType, lastUpdateBy, lastUpdateTime', 'safe', 'on'=>'search'),
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
			'client' => array(self::HAS_ONE, 'Client', 'id'),
			'clients' => array(self::HAS_MANY, 'Client', 'userId'),
			'projects' => array(self::HAS_MANY, 'Project', 'accountManager'),
			'lastUpdateBy0' => array(self::BELONGS_TO, 'Users', 'lastUpdateBy'),
			'users' => array(self::HAS_MANY, 'Users', 'lastUpdateBy'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'name' => 'Name',
			'mobile' => 'Mobile',
			'password' => 'Password',
			'userType' => 'User Type',
			'lastUpdateBy' => 'Last Update By',
			'lastUpdateTime' => 'Last Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('userType',$this->userType,true);
		$criteria->compare('lastUpdateBy',$this->lastUpdateBy);
		$criteria->compare('lastUpdateTime',$this->lastUpdateTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
