<?php

namespace codexten\yii\modules\report\controllers;

use codexten\yii\web\Controller;

class ReportController extends Controller
{
    public $reportClass;
    public $gridViewClass;

    /**
     * {@inheritDoc}
     */
    public function getPathMaps()
    {
        return [
            '@moduleReport/views/report',
        ];
    }


    public function actionIndex()
    {
        $searchModel = new $this->reportClass();


        return $this->render('index', [
            'searchModel' => $searchModel,
            'gridViewClass' => $this->gridViewClass,
        ]);
    }

}
