<?php

/**
 * This is the model class for table "{{library}}".
 *
 * The followings are the available columns in table '{{library}}':
 * @property integer $id
 * @property integer $library_type
 * @property string $title
 * @property integer $artist_id
 * @property string $url_link
 * @property string $library_file
 * @property integer $downloadable
 * @property integer $status
 */
class Library extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{library}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('library_type, title, artist_id, url_link, library_file, downloadable, status', 'required'),
			array('library_type, artist_id, downloadable, status', 'numerical', 'integerOnly'=>true),
			array('title, library_file', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, library_type, title, artist_id, url_link, library_file, downloadable, status', 'safe', 'on'=>'search'),
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
			'library_type' => 'Library Type',
			'title' => 'Title',
			'artist_id' => 'Artist',
			'url_link' => 'Url Link',
			'library_file' => 'Library File',
			'downloadable' => 'Downloadable',
			'status' => 'Status',
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
		$criteria->compare('library_type',$this->library_type);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('artist_id',$this->artist_id);
		$criteria->compare('url_link',$this->url_link,true);
		$criteria->compare('library_file',$this->library_file,true);
		$criteria->compare('downloadable',$this->downloadable);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Library the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
