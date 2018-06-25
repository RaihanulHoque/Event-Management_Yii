<?php

/**
 * This is the model class for table "{{gallery_seat}}".
 *
 * The followings are the available columns in table '{{gallery_seat}}':
 * @property integer $id
 * @property string $seat_position_tracking
 * @property integer $gallery_id
 * @property integer $row_id
 * @property integer $serial_no
 */
class GallerySeat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gallery_seat}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('seat_position_tracking, gallery_id, row_id, serial_no', 'required'),
			array('gallery_id, row_id, serial_no', 'numerical', 'integerOnly'=>true),
			array('seat_position_tracking', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, seat_position_tracking, gallery_id, row_id, serial_no', 'safe', 'on'=>'search'),
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
			'seat_position_tracking' => 'Seat Position Tracking',
			'gallery_id' => 'Gallery',
			'row_id' => 'Row',
			'serial_no' => 'Serial No',
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
		$criteria->compare('seat_position_tracking',$this->seat_position_tracking,true);
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('row_id',$this->row_id);
		$criteria->compare('serial_no',$this->serial_no);

		return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 100,
            ),
        ));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GallerySeat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
		
	public static function getData($id, $field) {
        $value = GallerySeat::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
	
}
