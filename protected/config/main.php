<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'theme' => 'ace_template',
	'name' => 'App',
    //Default time zone
    'timeZone' => 'Asia/Dhaka',
    //Default source language
    'sourceLanguage' => 'en_us',
    // preloading 'log' component
    'preload' => array('log'),
    // path aliases Calendar
   // Yii::setPathOfAlias('ecalendarview', dirname(__FILE__) . '/../extensions/ecalendarview'),
      // path aliases for yii
    'aliases' => array( 
        /*
        //callendar
        'ecalendarview'=> dirname(__DIR__ . '/../extensions/ecalendarview'),//
        // yiistrap configuration
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
        // yiiwheels configuration
        'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'), // change if necessary
        */
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        // import paths - yiistrap configuration
        /* 'bootstrap.helpers.TbHtml', */
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool    
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'admingii',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
    ),
     
    //##############Showing error for this line and I hide this ###############
    'behaviors' => array(
        'runEnd' => array(
            'class' => 'application.components.WebApplicationEndBehavior',
        ),
    ),
     
	// application components
	'components'=>array(
 
        'browser' => array(
            'class' => 'application.extensions.browser.CBrowserComponent',
        ),


		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		     'urlManager' => array(
            'rules' => array(
                'defaultController' => 'login',
            ),
        ),
		
		//image Upload Extension
        'simpleImage' => array(
        'class' => 'application.extensions.CSimpleImage',
		),

      
       /* 
        // uncomment the following to enable URLs in path-format   
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'urlSuffix' => '.html',
            'rules' => array(
                '<action>' => 'site/<action>',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        */
		'session' => array(
            'class' => 'CDbHttpSession',
            'connectionID' => 'db',
            'sessionName' => 'EVENTEK',
            'autoCreateSessionTable' => false,
            'sessionTableName' => 'et_yiisession',
            'cookieMode' => 'only',
            'timeout' => 36000,
        ),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=eventek_db',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'et_'
        ),
 
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'info@eventek.com.au',
	),
);