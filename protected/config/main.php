<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',  //папка
	'name'=>'vitebskgas.by',
	//'defaultController'=>'test',					// контроллер по умолчанию
	/*array(
    'site/stop',
    'param1'=>'value1',
    'param2'=>'value2',
	),*/

	// preloading 'log' component
	//'preload'=>array('log'),

	// автозагрузка моделей и компонентов -------------------------------------------------------------
	'import'=>array(
	//	'application.models.*',
		'application.components.*',
		//'application.models.*',
		//'application.extensions.pdf.mpdf.mpdf',  //для печати в PDF
	),

	// 'modules'=>array(
	// 	// uncomment the following to enable the Gii tool

	// 	'gii'=>array(
	// 		'class'=>'system.gii.GiiModule',
	// 		'password'=>'flatron',
	// 		// If removed, Gii defaults to localhost only. Edit carefully to taste.
	// 		'ipFilters'=>array('127.0.0.1','::1'),
	// 	),

	// ),

	// application components -------------------------------------------------------------
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			//'allowAutoLogin'=>false,
				//если не авторизован + фильтр на action - перенаправит сюда
			//'loginUrl'=>array('site/info'),
			//'returnUrl'=>array('/guestbook'),
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
			//'connectionString' => ('pgsql:host='.$host.';dbname='.$dbname,$user, $pass),
		),
		*/
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'db'=>array(
			//'class'=>'CDbConnection',
			'connectionString'=>'mysql:host=localhost;dbname=vitebskgas',
            'username'=>'root',
            'password'=>'root',
            'charset'=>'utf8'
			//'tablePrefix' => 'vgs_',
		),

		/*'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),*/
		/*'log'=>array(
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
				/
			),
		),*/
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'Andrew@vitebsk.oblgas.by',
		'adminFIO' => 'Шавнёв А.Л.',
	),
);