<?php

/**
 * This is the model class for table "{{state}}".
 *
 * The followings are the available columns in table '{{state}}':
 * @property string $id
 * @property integer $country_id
 * @property string $state_name
 * @property string $state_3_code
 * @property string $state_2_code
 * @property double $ordering
 * @property integer $published
 * @property string $created_on
 * @property double $created_by
 * @property string $modified_on
 * @property double $modified_by
 * @property string $locked_on
 * @property double $locked_by
 */
class State extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return State the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{state}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('country_id, state_name', 'required'),
            array('country_id, published', 'numerical', 'integerOnly' => true),
            array('ordering, created_by, modified_by, locked_by', 'numerical'),
            array('state_name', 'length', 'max' => 192),
            array('state_3_code', 'length', 'max' => 9),
            array('state_2_code', 'length', 'max' => 6),
            array('created_on, modified_on, locked_on', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, country_id, state_name, state_3_code, state_2_code, ordering, published, created_on, created_by, modified_on, modified_by, locked_on, locked_by', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Yii::t('State', 'id'),
            'country_id' => Yii::t('State', 'country_id'),
            'state_name' => Yii::t('State', 'state_name'),
            'state_3_code' => Yii::t('State', 'state_3_code'),
            'state_2_code' => Yii::t('State', 'state_2_code'),
            'ordering' => Yii::t('State', 'ordering'),
            'published' => Yii::t('State', 'published'),
            'created_on' => Yii::t('State', 'created_on'),
            'created_by' => Yii::t('State', 'created_by'),
            'modified_on' => Yii::t('State', 'modified_on'),
            'modified_by' => Yii::t('State', 'modified_by'),
            'locked_on' => Yii::t('State', 'locked_on'),
            'locked_by' => Yii::t('State', 'locked_by'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;
        $criteria->alias = 't';
        $criteria->select = 't.id, (SELECT c.country_name FROM {{country c}} WHERE c.id=t.country_id) AS country_id, t.state_name, t.state_3_code, t.state_2_code, t.ordering, t.published, t.created_on, (SELECT u.full_name FROM {{users u}} WHERE u.id=t.created_by) AS created_by, t.modified_on, t.modified_by, t.locked_on, t.locked_by';

        $criteria->compare('t.id', $this->id, true);
        $criteria->compare('t.country_id', $this->country_id);
        $criteria->compare('t.state_name', $this->state_name, true);
        $criteria->compare('t.state_3_code', $this->state_3_code, true);
        $criteria->compare('t.state_2_code', $this->state_2_code, true);
        $criteria->compare('t.ordering', $this->ordering);
        $criteria->compare('t.published', $this->published);
        $criteria->compare('t.created_on', $this->created_on, true);
        $criteria->compare('t.created_by', $this->created_by);
        $criteria->compare('t.modified_on', $this->modified_on, true);
        $criteria->compare('t.modified_by', $this->modified_by);
        $criteria->compare('t.locked_on', $this->locked_on, true);
        $criteria->compare('t.locked_by', $this->locked_by);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => false,
        ));
    }

    public static function getState($id) {
        $value = State::model()->findByAttributes(array('id' => $id));
        if (empty($value->state_name)) {
            return null;
        } else {
            return $value->state_name;
        }
    }

    public static function get_sate_list($controller, $field, $id) {
        $rValue = Yii::app()->db->createCommand()
                ->select('id,country_id,state_name')
                ->from('{{state}}')
                ->where('published=1')
                ->order('state_name')
                ->queryAll();
        echo '<select id="' . $controller . '_' . $field . '" name="' . $controller . '[' . $field . ']" class="select2">';
        echo '<option value="">Select a State</option>';
        foreach ($rValue as $key => $values) {
            if ($values["id"] == $id) {
                echo '<option selected="selected" value="' . $values["id"] . '" class="' . $values["country_id"] . '">' . $values["state_name"] . '</option>';
            } else {
                echo '<option value="' . $values["id"] . '" class="' . $values["country_id"] . '">' . $values["state_name"] . '</option>';
            }
        }
        echo '</select>';
    }

	public static function getData($id, $field) {
        $value = State::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }	
	
}
