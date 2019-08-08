<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        
        $max = 20;
        
        $list = Test::getNewsList($max);
                
        return $this->render('index', [
            'list' => $list,
        ]);
    }
    
    public function actionView($id)
    {
        $item = Test::getItem($id);

        return $this->render('view', [
            'item' => $item 
        ]);
    }    



}