<?php

class GalleryRowsController extends BackEndController
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
		$model=new GalleryRows;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GalleryRows']))
		{
			$model->attributes=$_POST['GalleryRows'];
			
			$model->created_on = new CDbExpression('NOW()');
			$model->created_by=Yii::app()->user->id;
				
			if($model->save()){
				if($model->number_of_seats>=0){
					//print $model->number_of_seats; exit();
					for($i=0;$i<$model->number_of_seats; $i++){
						$gallery_seats= new GallerySeat;
						$serial=$i+1;
						$gallery_seats->serial_no= $serial;
						$gallery_seats->row_id = $model->id;
						
						$floor_code=GalleryFloor::getData($model->floor_name, 'short_code');
						
						$gallery_seats->seat_position_tracking = $floor_code.'-'.$model->row_title.'-'.$serial;
						$gallery_seats->gallery_id= $model->gallery_id;
						//print $gallery_seats->seat_position_tracking; exit();
						$gallery_seats->save();
						if (!$gallery_seats->save()) {
							print_r($gallery_seats->getErrors());
							exit();
						}
					}
				}
				$this->redirect(array('create'));
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

		if(isset($_POST['GalleryRows']))
		{
			$model->attributes=$_POST['GalleryRows'];
			$model->updated_on = new CDbExpression('NOW()');
			$model->updated_by=Yii::app()->user->id;
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('GalleryRows');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new GalleryRows('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GalleryRows']))
			$model->attributes=$_GET['GalleryRows'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GalleryRows the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GalleryRows::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GalleryRows $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gallery-rows-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
