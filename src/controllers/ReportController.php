<?php

namespace codexten\yii\modules\report\controllers;

use codexten\yii\web\Controller;

class ReportController extends Controller
{
    public $reportClass;

    public function actionIndex()
    {

        return $this->render('index');
    }

}
