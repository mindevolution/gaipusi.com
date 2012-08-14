<?php

/**
 * This is the model class for table "gp_article".
 *
 * The followings are the available columns in table 'gp_article':
 * @property integer $id
 * @property integer $cat_id
 * @property string $title
 * @property string $body
 * @property integer $hits
 * @property integer $is_show
 * @property string $author
 * @property string $pic
 * @property string $datetime
 * @property integer $maincat_id
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return 'gp_article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, maincat_id', 'required'),
			array('cat_id, hits, is_show, maincat_id', 'numerical', 'integerOnly'=>true),
			array('cat_id, pic, datetime', 'length', 'max'=>255),
			array('author', 'length', 'max'=>100),
			array('body', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cat_id, title, body, hits, is_show, author, pic, datetime, maincat_id', 'safe', 'on'=>'search'),
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
		'Category' =>array(self::BELONGS_TO,'Category','cat_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cat_id' => 'Cat',
			'title' => '标题',
			'body' => '内容',
			'hits' => '点击量',
			'is_show' => 'Is Show',
			'author' => '作者',
			'pic' => '图片',
			'datetime' => '时间',
			'maincat_id' => '一级分类',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('is_show',$this->is_show);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('maincat_id',$this->maincat_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getList()
	{
		 $model = Category::model()->findAllByAttributes(array('parent_id'=>0));
                return CHtml::listData($model, 'id', 'name');
	}
	
	 public function getArtList($parent_id)
        {
                 $model = Category::model()->findAllByAttributes(array('parent_id'=>$parent_id));
                return CHtml::listData($model, 'id', 'name');
        }
	
	
}