<?php

/**
 * This is the model class for table "{{ticket_category_color}}".
 *
 * The followings are the available columns in table '{{ticket_category_color}}':
 * @property integer $id
 * @property string $color_name
 * @property string $hex_code
 * @property string $rgb_code
 */
class TicketCategoryColor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{ticket_category_color}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, color_name, hex_code, rgb_code', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('color_name, rgb_code', 'length', 'max'=>50),
			array('hex_code', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, color_name, hex_code, rgb_code', 'safe', 'on'=>'search'),
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
			'color_name' => 'Color Name',
			'hex_code' => 'Hex Code',
			'rgb_code' => 'Rgb Code',
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
		$criteria->compare('color_name',$this->color_name,true);
		$criteria->compare('hex_code',$this->hex_code,true);
		$criteria->compare('rgb_code',$this->rgb_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TicketCategoryColor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
		public static function getData($id, $field) {
        $value = TicketCategoryColor::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
