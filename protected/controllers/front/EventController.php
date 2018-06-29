<?php

class EventController extends FrontEndController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

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
				'actions'=>array('index','view','addtocart', 'updateCart', 'cartDelete', 'subscribe'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','index', 'view', 'checkout'),
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
	
	public function actionAddtocart($category, $event, $qty, $price) {
        $model = new TicketReservationParent;
		$model->ticket_category = $category;
		$model->event_id = $event;			
		$model->num_of_ticket = $qty;
		$model->unit_price = $price;
		$model->total_price = $qty * $price;
		$model->reservation_type=3;
		$model->status=1;
		$model->seassionid=session_id();
		$model->save();
    }

    public function actionUpdateCart($id, $qty) {
        //$model = new TicketReservationParent;
		$modelCart=$this->loadModelCart($id);
		if(isset($_POST['TicketReservationParent']))
		{
			$modelCart->num_of_ticket = $qty;
			$price= $modelCart->unit_price;
			$modelCart->total_price = $qty * $price;
			$modelCart->save();
		}
    }

    public function actionCartDelete($id) {
        //$model = new TicketReservationParent;
        $model=$this->loadModelCart($id);
		$this->loadModelCart($id)->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('event/view', 'id'=>$model->event_id));
		//$("#cartContent").load(' echo Yii::app()->getRequest()->getUrl(); #cartContent')
		 
    }



 

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$modelSub=new EventSubscribe;
		
		//Ticket Reservation
		$model_ticResrv = new TicketReservationParent('search_cart');
		$model_ticResrv->unsetAttributes();  // clear any default values
		if (isset($_GET['TicketReservationParent'])) {
			$model_ticResrv->attributes = $_GET['TicketReservationParent'];
		}
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'modelSub'=>$modelSub,
			'model_ticResrv'=>$model_ticResrv,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Event;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{	
			$model->attributes=$_POST['Event'];
			
			$model->created_on = new CDbExpression('NOW()');
			$model->created_by=Yii::app()->user->id;
			if($model->save()){
				
				$this->redirect(array('view', 'id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionSubscribe()
	{
		$modelSub=new EventSubscribe;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EventSubscribe']))
		{	
			$modelSub->attributes=$_POST['EventSubscribe'];
			$modelSub->status=1; //Subscription Active
			
			if($modelSub->save()){
				
				$this->redirect(array('event/view', 'id'=>$modelSub->event_id));
			}
		}

		$this->render('view',array(
			'modelSub'=>$modelSub,
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

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			$model->modified_on = new CDbExpression('NOW()');
			$model->modified_by=Yii::app()->user->id;
			if($model->save()){
				
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTicketReserve()
	{
		$modelTicRev=new TicketReservationParent;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TicketReservationParent']))
		{	
			$modelTicRev->attributes=$_POST['TicketReservationParent'];
			
			$modelTicRev->created_on = new CDbExpression('NOW()');
			$modelTicRev->created_by=Yii::app()->user->id;
			if($modelTicRev->save()){
				
				$this->redirect(array('view', 'id'=>$modelTicRev->id));
			}
		}

		$this->render('create',array(
			'model'=>$modelTicRev,
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
		$dataProvider=new CActiveDataProvider('Event');
		$this->render('event_list');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Event('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Event']))
			$model->attributes=$_GET['Event'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Event the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Event::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Event the loaded model
	 * @throws CHttpException
	 */
	public function loadModelCart($id)
	{
		$modelCart=TicketReservationParent::model()->findByPk($id);
		if($modelCart===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $modelCart;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Event $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='event-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	

}
