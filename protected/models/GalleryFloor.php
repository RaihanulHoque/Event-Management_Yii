<?php

/**
 * This is the model class for table "{{gallery_floor}}".
 *
 * The followings are the available columns in table '{{gallery_floor}}':
 * @property integer $id
 * @property integer $title
 * @property integer $gallery_id
 * @property string $remark
 */
class GalleryFloor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gallery_floor}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title,short_code, gallery_id', 'required'),
			array('gallery_id', 'numerical', 'integerOnly'=>true),
			array('remark', 'length', 'max'=>200),
			array('short_code', 'length', 'max'=>5),
			array('gallery_id', 'UniqueAttributesValidator', 'with' => 'title', 'message'=>'The Gallery has this FLOOR already!'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title,short_code, gallery_id, remark', 'safe', 'on'=>'search'),
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
			'short_code' => 'Short Code',
			'title' => 'Title',
			'gallery_id' => 'Gallery',
			'remark' => 'Remark',
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
		$criteria->compare('title',$this->title);
		$criteria->compare('short_code',$this->short_code);
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('remark',$this->remark,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GalleryFloor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

       
    public static function get_GalleryFloor_list($controller, $field) {
        $rValue = Yii::app()->db->createCommand()
                ->select('id,title,gallery_id')
                ->from('{{gallery_floor}}')
                 ->order('title')
                ->queryAll();
        echo '<select id="' . $controller . '_' . $field . '" name="' . $controller . '[' . $field . ']" class="span5 marginBot10px">';
        echo '<option value="">--select Gallery Floor--</option>';
        foreach ($rValue as $key => $values) {
                echo '<option value="' . $values["id"] . '" class="' . $values["gallery_id"] . '">' . $values["title"] . '</option>';
         }
        echo '</select>';
    }	

	
	public static function getData($id, $field) {
        $value = GalleryFloor::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
		
	
}
