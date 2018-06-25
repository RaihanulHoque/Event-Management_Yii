<?php

/**
 * This is the model class for table "{{artist}}".
 *
 * The followings are the available columns in table '{{artist}}':
 * @property integer $id
 * @property string $name
 * @property integer $art_category
 * @property string $culture
 * @property integer $country
 * @property integer $state
 * @property integer $rating_mark
 * @property string $rating_referance
 * @property string $photo
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class Artist extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{artist}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, art_category, culture, country, state, rating_mark, rating_referance, photo, created_by, created_on, updated_by', 'required'),
			array('art_category, country, state, rating_mark, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>150),
			array('culture, photo', 'length', 'max'=>100),
			array('updated_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, art_category, culture, country, state, rating_mark, rating_referance, photo, created_by, created_on, updated_by, updated_on', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'art_category' => 'Art Category',
			'culture' => 'Culture',
			'country' => 'Country',
			'state' => 'State',
			'rating_mark' => 'Rating Mark',
			'rating_referance' => 'Rating Referance',
			'photo' => 'Photo',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'updated_by' => 'Updated By',
			'updated_on' => 'Updated On',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('art_category',$this->art_category);
		$criteria->compare('culture',$this->culture,true);
		$criteria->compare('country',$this->country);
		$criteria->compare('state',$this->state);
		$criteria->compare('rating_mark',$this->rating_mark);
		$criteria->compare('rating_referance',$this->rating_referance,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_on',$this->updated_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artist the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
