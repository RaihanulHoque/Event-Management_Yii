<?php

class GalleryController extends BackEndController
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
				'actions'=>array('create','update','admin','delete'),
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
		$model=new Gallery;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Gallery']))
		{
			$model->attributes=$_POST['Gallery'];
			
			$model->created_on = new CDbExpression('NOW()');
			$model->created_by=Yii::app()->user->id;
			
			$upload=$model->photo=CUploadedFile::getInstance($model,'photo');
            $imageName=time().'.jpg';
            $model->image_rename=$imageName;
			
			$target = dirname(__FILE__) .'/../../uploads/gallery';
			if (!is_dir($target)) {
				mkdir($target, 0777, true);
			}
			//print $target; exit();
			
			if($model->save()){
				if (!empty($model->photo)) {
                        $model->photo->saveAs($target.'/'.$imageName);
                        $file=$target.'/'.$imageName;
                        $img = Yii::app()->simpleImage->load($file);
                        $img->resizeToHeight(800);
                        $img->save($target."/h800px/".$imageName);
                     	$img->resizeToWidth(800);
                        $img->save($target."/w800px/".$imageName);
                        }
					//print 	$model->photo; exit();
				Yii::app()->user->setFlash('success', "Gallery Added successfully");
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
	/*******************************
	 public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$previuosFileName = $model->image_rename;
		
		if(isset($_POST['Gallery']))
		{
			$model->attributes=$_POST['Gallery'];
			$model->updated_on = new CDbExpression('NOW()');
			$model->updated_by = Yii::app()->user->id;
				
			$target = dirname(__FILE__) .'/../../uploads/gallery';
			if (!is_dir($target)) {
				mkdir($target, 0777, true);
			}
			
			if($model->save()){
				if (!empty($model->photo)) {
					if ($model->validate(array('photo'))) {
						$myFile = $target . '/' . $previuosFileName;
						if ((is_file($myFile)) && (file_exists($myFile))) {
							unlink($myFile);
						}
						$model->photo = CUploadedFile::getInstance($model, 'photo');
						$model->image_rename =  time().'.jpg';
					} else {
						$model->photo = '';
						$model->image_rename = '0';
					}
					$upload=$model->photo=CUploadedFile::getInstance($model,'photo');
					$imageName=time().'.jpg';
					$model->image_rename=$imageName;
					$target = dirname(__FILE__) .'/../../uploads/gallery';
					if (!is_dir($target)) {
						mkdir($target, 0777, true);
					}
						$model->photo->saveAs($target.'/'.$imageName);
						$file=$target.'/'.$imageName;
						$img = Yii::app()->simpleImage->load($file);
						$img->resizeToHeight(800);
						$img->save($target."/h800px/".$imageName);
						$img->resizeToWidth(800);
						$img->save($target."/w800px/".$imageName);
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}
	********************************* */
	public function actionUpdate($id)
		{
			$model=$this->loadModel($id);
			//$modelcat = Cat::model()->findAll();
			//$oldfilename = $model->photo;
			$oldfilename = $model->image_rename;
			
			$target = dirname(__FILE__) .'/../../uploads/gallery';
			if (!is_dir($target)) {
				mkdir($target, 0777, true);
			}
			
			if(isset($_POST['Gallery']))
			{
				$uploadedFile=CUploadedFile::getInstance($model,'photo');
				
				if(!empty($uploadedFile)){
					if(!empty($model->photo)){ // check db if image exists
						//if(file_exists($target.'/'.$model->photo)) { // chech dr if image exists
						if(file_exists($target.'/'.$model->image_rename)) { // chech dr if image exists
						//unlink($target.'/'.$model->photo);
						unlink($target.'/'.$model->image_rename);
						}
					}
				}

				if (!empty($uploadedFile)) {

				$rnd = rand(0,9999);
				$today = date("Ymdhis");
				$model->attributes=$_POST['Gallery'];
				$fileName = "{$rnd}{$today}img{$uploadedFile}";
				$model->photo = $fileName;
				$model->image_rename = $fileName;
				
				} else {
					
				$model=$this->loadModel($id);
				//$oldfilename = $model->photo;
				$oldfilename = $model->image_rename;

				$model->photo = $oldfilename;
				$model->image_rename = $oldfilename;
				}
				
				if($model->save())
				{
					if(!empty($uploadedFile)) // check if uploaded file is set or not
					{
					$uploadedFile->saveAs($target.'/'.$model->image_rename);
					}
					$this->redirect(array('view','id'=>$model->id));
				}
				
			}$this->render('update',array('model'=>$model));
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
		$dataProvider=new CActiveDataProvider('Gallery');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Gallery('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gallery']))
			$model->attributes=$_GET['Gallery'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Gallery the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Gallery::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Gallery $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gallery-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
