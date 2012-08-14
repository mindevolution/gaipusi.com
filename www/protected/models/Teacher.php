<?php

/**
 * This is the model class for table "gp_teacher".
 *
 * The followings are the available columns in table 'gp_teacher':
 * @property string $id
 * @property string $name
 * @property string $sex
 * @property string $nationality
 * @property string $city
 * @property string $qualification
 * @property string $achive
 * @property string $experience
 * @property string $pic
 * @property string $lang
 */
class Teacher extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Teacher the static model class
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
		return 'gp_teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, sex, nationality, qualification, achive', 'required'),
			array('name', 'length', 'max'=>50),
			array('sex, nationality', 'length', 'max'=>10),
			array('city', 'length', 'max'=>20),
			array('qualification, pic, lang', 'length', 'max'=>100),
			array('experience', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, sex, nationality, city, qualification, achive, experience, pic, lang', 'safe', 'on'=>'search'),
			array('pic','file','allowEmpty'=>true,'types'=>'jpg, gif, png','maxSize'=>1024 * 1024 * 1,'tooLarge'=>'The file was larger than 1MB. Please upload a smaller file.'),
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
			'sex' => '性别',
			'nationality' => '国籍',
			'city' => '现居城市',
			'qualification' => '任职资格',
			'achive' => '学业成绩',
			'experience' => '教学经验',
			'pic' => '图片',
			'lang' => '语言',
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
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('qualification',$this->qualification,true);
		$criteria->compare('achive',$this->achive,true);
		$criteria->compare('experience',$this->experience,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('lang',$this->lang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}