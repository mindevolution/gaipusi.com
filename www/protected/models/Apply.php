<?php

/**
 * This is the model class for table "gp_apply".
 *
 * The followings are the available columns in table 'gp_apply':
 * @property string $id
 * @property string $name
 * @property string $gender
 * @property string $Phone
 * @property string $email
 * @property string $address
 * @property integer $age
 * @property string $class
 * @property string $level
 * @property string $school
 */
class Apply extends CActiveRecord
{
        public $verifyCode; 
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Apply the static model class
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
		return 'gp_apply';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, gender, Phone, email, class, school', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('name, address', 'length', 'max'=>100),
			array('gender', 'length', 'max'=>10),
			array('Phone', 'length', 'max'=>20),
			array('email', 'email'),
			array('class, school', 'length', 'max'=>30),
			array('level', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, gender, Phone, email, address, age, class, level, school', 'safe', 'on'=>'search'),
                        array('verifyCode', 'captcha', 'allowEmpty'=>!Yii::app()->user->isGuest),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '姓名',
			'gender' => '性别',
			'Phone' => '联系方式',
			'email' => '邮箱',
			'address' => '地址',
			'age' => '年龄',
			'class' => '班级',
			'level' => '自我评价',
			'school' => '学校',
                    'verifyCode' => '验证码',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('Phone',$this->Phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('class',$this->class,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('school',$this->school,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}