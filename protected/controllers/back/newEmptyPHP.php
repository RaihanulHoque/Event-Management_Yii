<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

public function actionCreate()
	{
		$model=new Product;

                //2017/GB/001
                $year=date('Y');
                $model->prod_create_year= $year;
                
		$model->created_on = new CDbExpression('NOW()');
		$model->created_by=Yii::app()->user->id;
                $companyID = $model->company_id = Yii::app()->user->company;//company
                
                
                $serial_no=  Product::findOutCurrentSerial($companyID, $year);

                $model->prod_code_SL=  $serial_no;
                //$model->prod_code="GB/".$departmentShort."/".$equip_typeShort."/"."$serial_no";
                
                 $model->prod_code=$year.'/GB/'.$serial_no;
                
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->prod_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
