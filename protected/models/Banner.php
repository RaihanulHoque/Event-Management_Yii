<?php

/**
 * This is the model class for table "{{banner}}".
 *
 * The followings are the available columns in table '{{banner}}':
 * @property integer $id
 * @property string $banner_category
 * @property string $photo
 * @property string $title
 * @property integer $event_id
 * @property integer $priority
 * @property string $event_link
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 * @property integer $status
 */
class Banner extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{banner}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, status', 'required'),
			array('id, event_id, priority, created_by, updated_by, status', 'numerical', 'integerOnly'=>true),
			//array('photo', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'), // this will allow empty field when page is update (remember here I create scenario update)			
			array('photo', 'file', 'types' => 'jpg,jpeg,gif,png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' =>1024*1024*5, 'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
			array('photo, title', 'length', 'max'=>255, 'on'=>'create, update'),			
			array('event_link', 'length', 'max'=>150),
			array('updated_on, title, event_id, priority,banner_category, event_link,photo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, photo, event_id, priority,banner_category, event_link, created_by, created_on, updated_by, updated_on, status', 'safe', 'on'=>'search'),
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
			'photo' => 'Event Cover Photo',
			'banner_category' => 'Banner Category',
			'title' => 'Banner Title',
			'event_id' => 'Event',
			'priority' => 'Priority',
			'event_link' => 'Event Link',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'updated_by' => 'Updated By',
			'updated_on' => 'Updated On',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('banner_category',$this->banner_category,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('event_link',$this->event_link,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_on',$this->updated_on,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Banner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	//Front End Banner General Site Slider
    public static function getGenBanner() {
        $rows = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('status=' . (int) 1 )
                ->where('status=1 AND banner_category=' . 1)
                ->order('priority')
                ->queryAll();

			foreach ($rows as $row) {
		        $id = $row['id'];
		        $photo = $row['photo'];
				$priority = $row['priority'];
				$status = $row['status'];
				$event= Event::getData($row['event_id'], 'title');
				echo'<li data-transition="3dcurtain-vertical" ddata-slotamount="15" data-masterspeed="300" data-delay="9400">
							<!-- COVER IMAGE -->
							<img src="'.Yii::app()->request->baseUrl.'/uploads/banners/resized_1280px/'.$photo.'" alt="'.$event.'" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						</li>';
		    }
    }
	
	//Front End Banner Event Related 
    public static function getEventBanner() {
        $rows = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{banner}}')
                ->where('status=' . (int) 1 )
                ->where('status=1 AND banner_category=' . 2)
                ->order('priority')
                ->queryAll();

			foreach ($rows as $row) {
		        $id = $row['id'];
		        $photo = $row['photo'];
				$priority = $row['priority'];
				$status = $row['status'];
				$event= Event::getData($row['event_id'], 'title');
				echo'<li data-transition="3dcurtain-vertical" ddata-slotamount="15" data-masterspeed="300" data-delay="9400">
							<!-- COVER IMAGE -->
							<img src="'.Yii::app()->request->baseUrl.'/uploads/banners/resized_1280px/'.$photo.'" alt="'.$event.'" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						</li>';
		    }
    }
}
