<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.01.2018
 * Time: 22:36
 */
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;


//namespace app\controllers;

//use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo __METHOD__;
    }

    public function actionPage()
    {
        echo __METHOD__;
    }
}