<?php
class SiteController extends Controller
{

	public function actions()
    {
        return array(
            'index'=>'application.controllers.site.indexAction',
            //'info'=>'application.controllers.test.InfoAction',
            //'db'=>'application.controllers.test.DbAction',
        );
    }


/* ------------------------- фильтры -------------------------*
	 public function filters()
    {
        return array(
            'accessControl',
        );
    }
/* --------------------------- паравила доступа ---------------*
public function accessRules()
    {
        return array(
        		// правила просматриваются по порядку до первого совпадения
        	array('allow',
                'actions'=>array('delete','index'),  	// только пользователь "test" получит доступ
                'users'=>array('test'),					// остальным выдаст ошибку
            ),
            array('deny',
                'actions'=>array('index', 'edit'),		// запреить всем доступ к "index"
                'users'=>array('*'),					// запрет должен стоять после разрешения
            ),

            array('deny',
                'actions'=>array('delete'),
                'roles'=>array('admin'),
                'users'=>array('*'),
            ),
        );
    }
*/
}
