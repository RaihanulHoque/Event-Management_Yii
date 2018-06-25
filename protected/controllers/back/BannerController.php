<?php

class BannerController extends BackEndController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Banner;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$target = dirname(__FILE__) .'/../../uploads/banners';
		if (!is_dir($target)) {
			mkdir($target, 0777, true);
		}
			
		if(isset($_POST['Banner']))
		{
			$rnd = rand(0,99999);  // generate random number between 0-9999
			$model->attributes=$_POST['Banner'];
			
			$upload=$model->photo=CUploadedFile::getInstance($model,'photo');
            //$imageName=time().'.jpg';
            //$model->image_rename=$imageName;
			
			//$uploadedFile=CUploadedFile::getInstance($model,'photo');
			$fileName = "{$rnd}-{$upload}";  // random number + file name
 			
			
			$model->attributes=$_POST['Banner'];
			$model->photo = $fileName;
				
			if($model->save()){
				$model->created_on = new CDbExpression('NOW()');
				$model->created_by=Yii::app()->user->id;
				
					if ($model->photo=CUploadedFile::getInstance($model,'photo')) {
						$model->photo->saveAs($target.'/'.$fileName);
                        $file=$target.'/'.$fileName;
                        $img = Yii::app()->simpleImage->load($file);
                     	$img->resizeToWidth(1280);
                        $img->save($target.'/resized_1280px/'.$fileName);
                        }else{
							print "photo not selected";exit();
						}
				
				Yii::app()->user->setFlash('success', "Upload successfully");
			
				$this->redirect(array('view','id'=>$model->id));
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
 

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		//Loading Previous File
		$previuosFileName = $model->photo;
		
		
		$target = dirname(__FILE__) .'/../../uploads/banners';
		if (!is_dir($target)) {
			mkdir($target, 0777, true);
		}
		
		if(isset($_POST['Banner']))
		{
 			$model->attributes=$_POST['Banner'];
			
			$model->updated_on = new CDbExpression('NOW()');
			$model->updated_by=Yii::app()->user->id;
			
			/**************** File Checking and Update ******************/
			if ($model->validate()) {
                /*
				if (empty($model->alias)) {
                    $model->alias = str_replace(' ', '-', strtolower($model->title));
                } else {
                    $model->alias = str_replace(' ', '-', strtolower($model->alias));
                }
				*/
                //Picture upload script
                if (@!empty($_FILES['Banner']['title']['photo'])) {
                    $model->photo = $_POST['Banner']['photo'];
                    if ($model->validate(array('photo'))) {
                        $myFile = $target . '/' . $previuosFileName;
                        if ((is_file($myFile)) && (file_exists($myFile))) {
                            unlink($myFile);
                        }
                        $model->photo = CUploadedFile::getInstance($model, 'photo');
                    } else {
                        $model->photo = '';
                    }
                    $model->photo->saveAs($target . '/' . time() . '_' . str_replace(' ', '_', strtolower($model->photo)));
                    $model->photo = time() . '_' . str_replace(' ', '_', strtolower($model->photo));
                } else {
                    $model->photo = $previuosFileName;
                }
                if ($model->save()) {
                    Yii::app()->user->setFlash('success', 'Saved successfully');
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	 
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Banner');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Banner('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Banner']))
			$model->attributes=$_GET['Banner'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Banner the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Banner::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Banner $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='banner-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
