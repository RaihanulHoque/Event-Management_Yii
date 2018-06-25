<?php

/**
 * This is the model class for table "{{gallery_rows}}".
 *
 * The followings are the available columns in table '{{gallery_rows}}':
 * @property integer $id
 * @property integer $gallery_id
 * @property string $row_title
 * @property integer $number_of_seats
 * @property integer $created_by
 * @property integer $created_on
 * @property integer $updated_by
 * @property integer $updated_on
 */
class GalleryRows extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gallery_rows}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gallery_id,floor_name, row_title,  number_of_seats', 'required'),
			array('gallery_id, number_of_seats', 'numerical', 'integerOnly'=>true),
			array('row_title', 'length', 'max'=>5),
			array('created_by,created_on,updated_by, updated_on, floor_name ', 'safe'),
			array('gallery_id', 'UniqueAttributesValidator', 'with' => 'row_title', 'message'=>'The Gallery has this ROW already!'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, gallery_id, row_title,floor_name,  number_of_seats,created_by,created_on,updated_by, updated_on', 'safe', 'on'=>'search'),
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
			'gallery_id' => 'Gallery',
			'row_title' => 'Row Title',
			'number_of_seats' => 'Number Of Seats',
			'floor_name' => 'Floor Name',
			'created_by' => 'created by',
			'created_on' => 'created on',
			'updated_by' => 'updated by',
			'updated_on' => 'updated on',
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
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('row_title',$this->row_title,true);
		$criteria->compare('number_of_seats',$this->number_of_seats);
		$criteria->compare('floor_name',$this->floor_name);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_on',$this->updated_on);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GalleryRows the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public static function getData($id, $field) {
        $value = GalleryRows::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }	
	
}
