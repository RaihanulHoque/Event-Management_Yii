<?php

/**
 * This is the model class for table "{{vouchers}}".
 *
 * The followings are the available columns in table '{{vouchers}}':
 * @property integer $id
 * @property integer $code
 * @property string $name
 * @property string $description
 * @property integer $uses
 * @property integer $max_uses
 * @property integer $max_uses_user
 * @property integer $type
 * @property integer $discount_percent
 * @property integer $is_fixed
 * @property string $starts_at
 * @property string $expires_at
 * @property integer $status
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class Vouchers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{vouchers}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, description, uses, max_uses, max_uses_user, type, discount_percent, is_fixed, starts_at, status, created_by, updated_by', 'required'),
			array('code, uses, max_uses, max_uses_user, type, discount_percent, is_fixed, status, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('expires_at, created_on, updated_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, code, name, description, uses, max_uses, max_uses_user, type, discount_percent, is_fixed, starts_at, expires_at, status, created_by, created_on, updated_by, updated_on', 'safe', 'on'=>'search'),
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
			'code' => 'Code',
			'name' => 'Name',
			'description' => 'Description',
			'uses' => 'Uses',
			'max_uses' => 'Max Uses',
			'max_uses_user' => 'Max Uses User',
			'type' => 'Type',
			'discount_percent' => 'Discount Percent',
			'is_fixed' => 'Is Fixed',
			'starts_at' => 'Starts At',
			'expires_at' => 'Expires At',
			'status' => 'Status',
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
		$criteria->compare('code',$this->code);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('uses',$this->uses);
		$criteria->compare('max_uses',$this->max_uses);
		$criteria->compare('max_uses_user',$this->max_uses_user);
		$criteria->compare('type',$this->type);
		$criteria->compare('discount_percent',$this->discount_percent);
		$criteria->compare('is_fixed',$this->is_fixed);
		$criteria->compare('starts_at',$this->starts_at,true);
		$criteria->compare('expires_at',$this->expires_at,true);
		$criteria->compare('status',$this->status);
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
	 * @return Vouchers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
