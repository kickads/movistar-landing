<?php

namespace app\controllers;

use app\models\Forms;
use app\models\FormsSearch;
use phpDocumentor\Reflection\Project;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\web\Controller;

class FormsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view'],
                'rules' => [
                    [
                        'actions' => ['index', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionRegister()
    {
        $data = Yii::$app->request;

        if ($data->post('phone')) {

            $model = new Forms();
            $model->full_name = $data->post('name');
            $model->phone = $data->post('phone');
            $model->ip = Yii::$app->request->getRemoteIP();;
            $model->user_agent = Yii::$app->request->getUserAgent();

            if($model->save()){
                $success = 200;
                // Informe s2s a kickads
                $model->informToKickads($data->post('ktoken'));
                // Informe s2s a Cliente
                $model->informToClient($data);
            }else{
                $success = $model->getErrors();
            }
        } else {
            $success = 400;
        }

        return Json::encode($success);
    }

    /**
     * Lists all Forms models.
     * @return mixed
     */
    public function actionIndex()
    {
    	$request       = Yii::$app->request;
	    $get           = $request->get();
	    
	    $startDate     = isset($get['FormsSearch']['startDate']) ? $get['FormsSearch']['startDate'] : date('Y-m-d',strtotime('NOW -1 week'));
	    $endDate       = isset($get['FormsSearch']['endDate']) ? $get['FormsSearch']['endDate'] : date('Y-m-d',strtotime('NOW'));
	    
        $this->layout = "main";
        $searchModel = new FormsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel'   => $searchModel,
            'dataProvider'  => $dataProvider,
            'startDate'     => $startDate,
            'endDate'       => $endDate,
        ]);
    }

}
