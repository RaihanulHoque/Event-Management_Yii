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
class UserFront extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_id, username, password, first_name, middle_name, email, phone, mobile, registerDate, groupid, user_type, address, profile_picture, image_rename, company', 'required'),
			array('company_id, createtime, lastvisit, superuser, groupid, user_type, reference_id, country, state, status, company', 'numerical', 'integerOnly'=>true),
			array('username, phone, mobile, zip', 'length', 'max'=>20),
			array('password, email, activation', 'length', 'max'=>128),
			array('first_name, middle_name, last_name', 'length', 'max'=>100),
			array('city', 'length', 'max'=>255),
			array('profile_picture', 'length', 'max'=>250),
			array('image_rename', 'length', 'max'=>50),
			array('language', 'length', 'max'=>2),
			array('lastvisitDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_id, username, password, first_name, middle_name, last_name, email, phone, mobile, activation, createtime, registerDate, lastvisit, lastvisitDate, superuser, groupid, user_type, reference_id, address, country, state, city, zip, profile_picture, image_rename, language, status, company', 'safe', 'on'=>'search'),
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
			'company_id' => 'Company',
			'username' => 'Username',
			'password' => 'Password',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'phone' => 'Phone',
			'mobile' => 'Mobile',
			'activation' => 'Activation',
			'createtime' => 'Createtime',
			'registerDate' => 'Register Date',
			'lastvisit' => 'Lastvisit',
			'lastvisitDate' => 'Lastvisit Date',
			'superuser' => 'Superuser',
			'groupid' => 'Groupid',
			'user_type' => 'User Type',
			'reference_id' => 'Reference',
			'address' => 'Address',
			'country' => 'Country',
			'state' => 'State',
			'city' => 'City',
			'zip' => 'Zip',
			'profile_picture' => 'Profile Picture',
			'image_rename' => 'Image Rename',
			'language' => 'Language',
			'status' => 'Status',
			'company' => 'Company',
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
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('activation',$this->activation,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('registerDate',$this->registerDate,true);
		$criteria->compare('lastvisit',$this->lastvisit);
		$criteria->compare('lastvisitDate',$this->lastvisitDate,true);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('groupid',$this->groupid);
		$criteria->compare('user_type',$this->user_type);
		$criteria->compare('reference_id',$this->reference_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('country',$this->country);
		$criteria->compare('state',$this->state);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('profile_picture',$this->profile_picture,true);
		$criteria->compare('image_rename',$this->image_rename,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('company',$this->company);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserFront the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
