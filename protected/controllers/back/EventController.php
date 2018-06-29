<?php

class EventController extends BackEndController
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
		$model = $this->loadModel($id);
		//Find Tickets Statistics
        $model_ticketReservationCounter = new TicketReservationCounter('searchSummary');
        $model_ticketReservationCounter->unsetAttributes();  // clear any default values
        if (isset($_GET['TicketReservationCounter'])) {
            $model_ticketReservationCounter->attributes = $_GET['TicketReservationCounter'];
        }
		
		
		 
        $this->render('view', array(
        	'model' => $model,
            'model_ticketReservationCounter' => $model_ticketReservationCounter,
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

			$model->status=2; //Upcoming

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
		$modelSubs=new EventSubscribe;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EventSubscribe']))
		{	
			$modelSubs->attributes=$_POST['Event'];
			
			$modelSubs->status=1; //Active

			if($modelSubs->save()){
				
				$this->redirect(array('view', 'id'=>$modelSubs->id));
			}
		}

		$this->render('view',array(
			'model'=>$modelSubs,
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
		$prevStatus=$model->status;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			$model->modified_on = new CDbExpression('NOW()');
			$model->modified_by=Yii::app()->user->id;
			

			if ($prevStatus !=1 && $model->status==1){
				//Check whether this event has Ticket Category?
				$num_of_TicketCat=TicketCategory::getTicketAmount($model->id);
				if ($num_of_TicketCat>0){
					if ($model->save()) {
						if ($model->status==1){
							$rows = Yii::app()->db->createCommand()
								->select('*')
								->from('{{ticket_category}}')
								->where('event_id=' . (int)$model->id)
								->queryAll();

							foreach ($rows as $row) {
								$catId = $row['id'];
								$num_of_seats = $row['seat_amount'];
								$reserved_seat_amount = 0; //This qty will change based on booking
								
								$ticketReservationCounter =new TicketReservationCounter;
								$ticketReservationCounter->event_id= $model->id;
								$ticketReservationCounter->ticket_category= $catId;
								$ticketReservationCounter->total_seat_amount= $num_of_seats;
								$ticketReservationCounter->reserved_seat_amount= $reserved_seat_amount;
								$ticketReservationCounter->available_seat_amount= $num_of_seats - $reserved_seat_amount;
								$ticketReservationCounter->checkpoint_time= new CDbExpression('NOW()');
								
								$ticketReservationCounter->save();
								if (!$ticketReservationCounter->save()) {
									print_r($ticketReservationCounter->getErrors());
									exit();
								}
							}
						}	
						Yii::app()->user->setFlash('success', 'Saved successfully');	
						$this->redirect(array('admin'));
					}
				}else{
					$this->redirect(array('ticketCategory/create', array()));
					Yii::app()->user->setFlash('error', 'Please assign ticket categories for this event first.');
					$this->redirect(array('ticketCategory/create'));
				}
			}else{
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
		$dataProvider=new CActiveDataProvider('Event');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
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
