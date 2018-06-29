<?php

/**
 * This is the model class for table "{{ticket_reservation_counter}}".
 *
 * The followings are the available columns in table '{{ticket_reservation_counter}}':
 * @property integer $id
 * @property integer $event_id
 * @property integer $ticket_category
 * @property integer $total_seat_amount
 * @property integer $reserved_seat_amount
 * @property integer $available_seat_amount
 * @property string $checkpoint_time
 * @property string $remarks
 */
class TicketReservationCounter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{ticket_reservation_counter}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, ticket_category, total_seat_amount, checkpoint_time', 'required'),
			array('event_id, ticket_category, total_seat_amount, available_seat_amount, reserved_seat_amount', 'numerical', 'integerOnly'=>true),
			array('remarks', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_id, ticket_category, reserved_seat_amount, total_seat_amount, available_seat_amount, checkpoint_time, remarks', 'safe', 'on'=>'search'),
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
			'ticket_category' => 'Ticket Category',
			'total_seat_amount' => 'Total Seat Amount',
			'reserved_seat_amount' => 'Reserved/Booked Seat Amount',
			'available_seat_amount' => 'Available Seat Amount',
			'checkpoint_time' => 'Checkpoint Time',
			'remarks' => 'Remarks',
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
		$criteria->compare('ticket_category',$this->ticket_category);
		$criteria->compare('total_seat_amount',$this->total_seat_amount);
		$criteria->compare('reserved_seat_amount',$this->reserved_seat_amount);
		$criteria->compare('available_seat_amount',$this->available_seat_amount);
		$criteria->compare('checkpoint_time',$this->checkpoint_time,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	//Search by Event ID
	public function searchSummary($event_id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		
        $criteria->condition = 'event_id=' . (int) $event_id;
		
		$criteria->compare('id',$this->id);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('ticket_category',$this->ticket_category);
		$criteria->compare('total_seat_amount',$this->total_seat_amount);
		$criteria->compare('reserved_seat_amount',$this->reserved_seat_amount);
		$criteria->compare('available_seat_amount',$this->available_seat_amount);
		$criteria->compare('checkpoint_time',$this->checkpoint_time,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TicketReservationCounter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	public static function getData($id, $field) {
        $value = TicketReservationCounter::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
