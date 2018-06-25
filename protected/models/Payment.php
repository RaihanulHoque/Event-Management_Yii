<?php

/**
 * This is the model class for table "{{payment}}".
 *
 * The followings are the available columns in table '{{payment}}':
 * @property integer $id
 * @property integer $event_id
 * @property integer $ticket_reservation_parent
 * @property integer $total_amount
 * @property integer $discount_voucher
 * @property integer $payment_type
 * @property integer $payment_status
 */
class Payment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{payment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, ticket_reservation_parent, total_amount, discount_voucher, payment_type, payment_status', 'required'),
			array('event_id, ticket_reservation_parent, total_amount, discount_voucher, payment_type, payment_status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_id, ticket_reservation_parent, total_amount, discount_voucher, payment_type, payment_status', 'safe', 'on'=>'search'),
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
			'event_id' => 'Event',
			'ticket_reservation_parent' => 'Ticket Reservation Parent',
			'total_amount' => 'Total Amount',
			'discount_voucher' => 'Discount Voucher',
			'payment_type' => 'Payment Type',
			'payment_status' => 'Payment Status',
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
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('ticket_reservation_parent',$this->ticket_reservation_parent);
		$criteria->compare('total_amount',$this->total_amount);
		$criteria->compare('discount_voucher',$this->discount_voucher);
		$criteria->compare('payment_type',$this->payment_type);
		$criteria->compare('payment_status',$this->payment_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Payment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
