<?php

/**
 * This is the model class for table "gp_connect".
 *
 * The followings are the available columns in table 'gp_connect':
 * @property string $id
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $QQ
 * @property integer $youbian
 */
class Connect extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Connect the static model class
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
		return 'gp_connect';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('phone, email, address, QQ, youbian', 'required'),
			array('youbian', 'numerical', 'integerOnly'=>true),
			array('phone, QQ', 'length', 'max'=>20),
			array('email', 'email'),
			array('address', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, phone, email, address, QQ, youbian', 'safe', 'on'=>'search'),
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
			'phone' => '电话',
			'email' => '邮箱',
			'address' => '地址',
			'QQ' => 'QQ',
			'youbian' => '邮编',
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
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('QQ',$this->QQ,true);
		$criteria->compare('youbian',$this->youbian);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}