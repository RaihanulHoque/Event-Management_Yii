<?php

/**
 * This is the model class for table "{{ticket_reservation_parent}}".
 *
 * The followings are the available columns in table '{{ticket_reservation_parent}}':
 * @property integer $id
 * @property integer $event_id
 * @property integer $reservation_type
 * @property integer $ticket_category
 * @property integer $user_id
 * @property integer $num_of_ticket
 * @property integer $total_price
 * @property string $seassionid
 * @property string $created_on
 */
class TicketReservationParent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{ticket_reservation_parent}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, reservation_type, ticket_category, num_of_ticket', 'required'),
			array('unit_price,total_price', 'length', 'max' => 10),
			array('seassionid', 'length', 'max' => 50),			
			array('event_id, reservation_type, ticket_category, user_id, num_of_ticket, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_id, unit_price, reservation_type, ticket_category, user_id, num_of_ticket, total_price, created_on, seassionid, status', 'safe', 'on'=>'search'),
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
			'reservation_type' => 'Reservation Type',
			'ticket_category' => 'Ticket Category',
			'user_id' => 'User',
			'num_of_ticket' => 'Num Of Ticket',
			'total_price' => 'Total Price',
			'unit_price' => 'Unit Price',
			'created_on' => 'Created On',
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
		$criteria->compare('reservation_type',$this->reservation_type);
		$criteria->compare('ticket_category',$this->ticket_category);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('num_of_ticket',$this->num_of_ticket);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('total_price',$this->total_price);
		$criteria->compare('seassionid',$this->seassionid,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	

    public function search_cart($event_id) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
		$session = session_id();

        $criteria = new CDbCriteria;
        $criteria->alias = 't';
        $criteria->condition = 't.event_id=' . $event_id . ' AND t.seassionid="' . $session .'" AND t.status= 1';
        //$criteria->condition = 't.event_id=' . $event_id . ' AND t.status= 1';
        $criteria->compare('t.id', $this->id);
        $criteria->compare('t.ticket_category', $this->ticket_category);
        $criteria->compare('t.unit_price', $this->unit_price);
        $criteria->compare('t.seassionid', $this->seassionid);
        $criteria->compare('t.num_of_ticket', $this->num_of_ticket);
        $criteria->compare('t.total_price', $this->total_price    );

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize20'],
            ),
            'sort' => array('defaultOrder' => 't.created_on DESC')
        ));
    }
/*	
    public function search_cart($event_id) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
		$session = session_id();

        $criteria = new CDbCriteria;
        $criteria->condition = 'event_id=' . $event_id . ' AND seassionid=' . $session .' AND status= 1';
        //$criteria->condition = 't.event_id=' . $event_id . ' AND t.status= 1';
        $criteria->compare('id', $this->id);
        $criteria->compare('ticket_category', $this->ticket_category);
        $criteria->compare('unit_price', $this->unit_price);
        $criteria->compare('seassionid', $this->seassionid);
        $criteria->compare('num_of_ticket', $this->num_of_ticket);
        $criteria->compare('total_price', $this->total_price    );

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize20'],
            ),
            'sort' => array('defaultOrder' => 'created_on DESC')
        ));
    }
   */ 
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TicketReservationParent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}	

	public static function getData($id, $field) {
        $value = TicketReservationParent::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }


    public static function getCartTotalPrice() {
    	$session = session_id();
        $all_total_price = Yii::app()->db->createCommand()
                ->select('IFNULL(SUM(total_price),0) AS all_total_price')
                ->from('{{ticket_reservation_parent}}')
                ->where('seassionid="' . $session . '" AND status=1')
                ->queryScalar();
        return $all_total_price;
    }

        public static function getCartQty() {
    	$session = session_id();
        $all_total_price = Yii::app()->db->createCommand()
                ->select('id')
                ->from('{{ticket_reservation_parent}}')
                ->where('seassionid="' . $session . '" AND status=1')
                ->queryAll();
            $count_val=count($all_total_price);
        	
        	return $count_val;
    }

}
