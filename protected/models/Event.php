<?php

/**
 * This is the model class for table "{{event}}".
 *
 * The followings are the available columns in table '{{event}}':
 * @property integer $id
 * @property integer $client_id
 * @property string $title
 * @property integer $event_category
 * @property integer $venue
 * @property string $date
 * @property string $time
 * @property string $special_info
 * @property string $details
 * @property string $event_cover
 * @property string $event_thumb
 * @property string $status
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{event}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id, title, event_category, venue, date, time', 'required'),
			array('client_id, event_category, venue, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>200),
			array('special_info', 'length', 'max'=>300),
			array('event_cover, event_thumb', 'length', 'max'=>100),
			array('modified_on, status, special_info, details, event_cover, event_thumb, created_by, created_on, modified_by', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client_id, title, event_category, venue, date, time, special_info, details, event_cover, event_thumb, status, created_by, created_on, modified_by, modified_on', 'safe', 'on'=>'search'),
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
			'client_id' => 'Client',
			'title' => 'Title',
			'event_category' => 'Event Category',
			'venue' => 'Venue',
			'date' => 'Date',
			'time' => 'Time',
			'special_info' => 'Special Info',
			'details' => 'Details',
			'status' => 'Event Status',
			'event_cover' => 'Event Cover',
			'event_thumb' => 'Event Thumb',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'modified_by' => 'Modified By',
			'modified_on' => 'Modified On',
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
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('event_category',$this->event_category);
		$criteria->compare('venue',$this->venue);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('special_info',$this->special_info,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('event_cover',$this->event_cover,true);
		$criteria->compare('event_thumb',$this->event_thumb,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('modified_on',$this->modified_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public static function getData($id, $field) {
        $value = Event::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }

	//Front End Ongoing Event List
    public static function getOngoingEvents() {
        $eventRows = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{event}}')
                ->where('status=' . (int) 1)
                ->queryAll();

			foreach ($eventRows as $event) {
		        $id = $event['id'];
		        $title = $event['title'];
				$date = $event['date'];
				$time = $event['time'];
				$event_thumb = $event['event_thumb'];
				$status = $event['status'];
				
				echo'<div class="col-sm-6 col-md-4">
					<div class="item-box">
						<figure>
							'.CHtml::link('<span class="overlay color2"></span>
							 <span class="inner">
									<span class="block fa fa-plus fsize20"></span>
									<strong>EVENT DETAIL</strong>
								</span>', 
							 array('/event/view', "id"=>$id), array("class"=>"item-hover")).'
							 '.CHtml::link('<i class="fa fa-shopping-cart"></i>
							 BUY TICKET', 
							 array('/event/view', "id"=>$id), array("class"=>"btn btn-primary add_to_cart")).'
							<img class="img-responsive" src="'.Yii::app()->request->baseUrl.'/uploads/event_photo/thumbs/T1.jpg" width="260" height="400" alt="">
							<div class="styleSecondBackground thumbDate">'.$date.' @ '.$time.'</div>
						</figure>
						<div class="item-box-desc">
							<h4>'.$title.'</h4>
						</div>
					</div>
				</div>'; 
				/*
					<img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl;?>/uploads/event_photo/thumbs/'.$event_thumb.'" width="260" height="400" alt="">
				*/
		    }
    }
    
    public static function get_date($date) {
        if (empty($date) || $date == '0000-00-00' || $date == '0000-00-00 00:00:00') {
            return null;
        } else {
            //return date("M j, Y", strtotime($date));
            try {
                $date_new = new DateTime($date);
            } catch (Exception $e) {
                return $e->getMessage();
            }
            return $date_new->format('M j, Y');
        }
    }

}
