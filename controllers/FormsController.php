<?php

namespace app\controllers;

use app\models\Forms;
use Yii;
use yii\helpers\Json;

class FormsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionRegister()
    {
        $data = Yii::$app->request;

        if ($data->post('name')) {

            $model = new Forms();
            $model->full_name = $data->post('name');
            $model->phone = $data->post('phone');
            $model->ip = Yii::$app->request->getRemoteIP();;
            $model->user_agent = Yii::$app->request->getUserAgent();

            if($model->save())
                $success = 200;
            else
                $success = $model->getErrors();
        } else {
            $success = 400;
        }

        return Json::encode($success);
    }

}
