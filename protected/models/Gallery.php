<?php

/**
 * This is the model class for table "{{gallery}}".
 *
 * The followings are the available columns in table '{{gallery}}':
 * @property integer $id
 * @property string $title
 * @property integer $gallery_type
 * @property integer $number_of_floor
 * @property string $address
 * @property string $location_map
 * @property string $photo
 * @property string $image_rename
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 * @property integer $total_capacity
 */
class Gallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gallery}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('photo','required','on'=>'create'),
			array('photo', 'file', 'allowEmpty' => TRUE,'types' => 'jpg, jpeg, gif, png','on'=>'update'),
			array('title, gallery_type', 'required'),
			array('gallery_type, number_of_floor, created_by, updated_by, total_capacity', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
			array('photo,image_rename', 'length', 'max'=>100),
			array('updated_on, gallery_type, number_of_floor, address, location_map, photo, created_by, created_on, updated_by, total_capacity', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, gallery_type, number_of_floor, address, location_map, photo,image_rename, created_by, created_on, updated_by, updated_on, total_capacity', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'gallery_type' => 'Gallery Type',
			'number_of_floor' => 'Number Of Floor',
			'address' => 'Address',
			'location_map' => 'Location Map',
			'photo' => 'Photo',
			'image_rename' => 'Photo',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'updated_by' => 'Updated By',
			'updated_on' => 'Updated On',
			'total_capacity' => 'Total Capacity',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('gallery_type',$this->gallery_type);
		$criteria->compare('number_of_floor',$this->number_of_floor);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('location_map',$this->location_map,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('image_rename',$this->image_rename,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_on',$this->updated_on,true);
		$criteria->compare('total_capacity',$this->total_capacity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
    public static function getData($id, $field) {
        $value = Gallery::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
	
}
