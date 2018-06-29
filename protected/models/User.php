<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property integer $company_id
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $activation
 * @property integer $createtime
 * @property string $registerDate
 * @property integer $lastvisit
 * @property string $lastvisitDate
 * @property integer $superuser
 * @property integer $groupid
 * @property integer $user_type
 * @property integer $reference_id
 * @property string $address
 * @property integer $country
 * @property integer $state
 * @property string $city
 * @property string $zip
 * @property string $profile_picture
 * @property string $image_rename
 * @property string $language
 * @property integer $status
 * @property integer $company
 */
class User extends CActiveRecord {

    public $verifyPassword;
    public $new_password;
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, username, email, mobile, password', 'required'),
            array('groupid, country, state, city, user_type, status, company', 'numerical', 'integerOnly' => true),
            array('first_name, middle_name, last_name', 'length', 'max' => 100),
            array('address', 'length', 'max' => 255),
            array('username', 'length', 'max' => 150),
            array('email, password, activation, phone, mobile', 'length', 'max' => 100),
            array('registerDate, lastvisitDate, address,image_rename, company', 'safe'),
            array('password', 'length', 'max' => 128, 'min' => 6, 'message' => 'Password is weak. Password must contain at least 6 characters, at least one lower case letter, at least one upper case letter, and at least one number.'),
            array('verifyPassword', 'compare', 'compareAttribute' => 'password', 'message' => 'Retype Password is incorrect.', 'on' => 'create'),
            array('username,email, mobile', 'unique'),
            array('username', 'unique', 'message' => 'This user name already exists.'),
            array('email', 'unique', 'message' => 'This email address already exists.'),
            array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u', 'message' => 'Username have incorrect symbols (A-z0-9).'),
            array('profile_picture', 'file', 'types' => 'jpg,jpeg,gif,png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' => 1024 * 1024 * 2, 'tooLarge' => 'The file was larger than 2MB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, first_name, username, email, password, registerDate, lastvisitDate, activation, groupid, country, state, city, phone, mobile, first_name, middle_name, last_name, user_type, status', 'safe', 'on' => 'search'),
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
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name'=>"Middle Name",
            'last_name'=>"Last Name",
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'verifyPassword'=>'Retype Password',
            'registerDate' => 'Joined',
            'lastvisitDate' => 'Last Online',
            'activation' => 'Activation',
            'groupid' => 'Group',
            'country' => 'Country',
            'state' => 'State',
            'city' => 'City',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'user_type' => 'User Type',
            'status' => 'Status',
            'profile_picture' => 'Profile Picture',
            'image_rename' => 'Profile Picture',
            'address' => 'Address',
            'company' => 'Company',
            'storeowner' => 'Store owner',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search($param = array()) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria($param);

        $criteria->compare('id', $this->id);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('middle_name', $this->middle_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('registerDate', $this->registerDate, true);
        $criteria->compare('lastvisitDate', $this->lastvisitDate, true);
        $criteria->compare('activation', $this->activation, true);
        $criteria->compare('groupid', $this->groupid);
        $criteria->compare('country', $this->country);
        $criteria->compare('state', $this->state);
        $criteria->compare('city', $this->city);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('image_rename', $this->image_rename, true);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('user_type', $this->user_type);
        $criteria->compare('status', $this->status);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('company_id', $this->company_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function get_user_name($user_id) {
        $value = User::model()->findByAttributes(array('id' => $user_id));
        if (empty($value->first_name)) {
            return null;
        } else {
            return $value->first_name;
        }
    }    
	public static function get_user_status($user_id) {
        $value = User::model()->findByAttributes(array('id' => $user_id));
        if (empty($value->status)) {
            return null;
        } else {
            return $value->status;
        }
    }

    public static function get_user_email($user_id) {
        $value = User::model()->findByAttributes(array('id' => $user_id));
        if (empty($value->email)) {
            return null;
        } else {
            return $value->email;
        }
    }
    
    public static function get_groupid($user_id) {
        $value = User::model()->findByAttributes(array('id' => $user_id));
        if (empty($value->groupid)) {
            return null;
        } else {
            return $value->groupid;
        }
    }
    //get profile picture for grid
    public static function get_picture_grid($id) {
        $value = User::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/profile_picture/' . $value->profile_picture;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/' . $value->profile_picture, 'Profile Picture', array('alt' => $value->first_name, 'class' => 'nav-user-photo', 'title' => $value->first_name, 'style' => 'width:50px;'));
        } else {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/profile.jpg', 'Profile Picture', array('alt' => $value->first_name, 'class' => 'nav-user-photo', 'title' => $value->first_name, 'style' => 'width:50px;'));
        }
    }

    //get profile picture
    public static function get_profile_picture($id) {
        $value = User::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/profile_picture/' . $value->profile_picture;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/' . $value->profile_picture, 'Profile Picture', array('alt' => $value->first_name, 'class' => 'thumblin', 'title' => $value->first_name, 'style' => 'width:120px;'));
        } else {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/profile.jpg', 'Profile Picture', array('alt' => $value->first_name, 'class' => 'thumblin', 'title' => $value->first_name, 'style' => 'width:120px;'));
        }
    }

    //get profile picture
    public static function get_profile_picture90px($id) {
        $value = User::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/profile_picture/' . $value->profile_picture;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/' . $value->profile_picture, 'Profile Picture', array('alt' => $value->first_name, 'class' => 'thumblin', 'title' => $value->first_name, 'style' => 'width:90px;'));
        } else {
            return CHtml::image(Yii::app()->baseUrl . '/uploads/profile_picture/profile.jpg', 'Profile Picture', array('alt' => $value->first_name, 'class' => 'thumblin', 'title' => $value->first_name, 'style' => 'width:90px;'));
        }
    }
    /**
     * Send mail method
     */
    public static function sendMail($to, $subject, $message, $fromName, $fromMail) {
        $headers = "From: " . $fromName . "<" . $fromMail . "> \r\nX-Mailer: php\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message = wordwrap($message, 70);
        $message = str_replace("\n.", "\n..", $message);
        return mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $message, $headers);
    }

    public static function getData($id, $field) {
        $value = User::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }

    
    /**
     * @return hash string.
     */
    public static function encrypting($string = "") {
        $hash = 'SHA1';
        if ($hash == "md5")
            return md5($string);
        if ($hash == "SHA1")
            return SHA1($string);
        else
            return hash($hash, $string);
    }
}