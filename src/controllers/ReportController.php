<?php

namespace codexten\yii\modules\report\controllers;

use codexten\yii\web\Controller;

class ReportController extends Controller
{
    public $reportClass;
    public $gridViewClass;
    public $exportMenuClass;

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

        $dataProvider = $searchModel->search(\Yii::$app->request->get());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'gridViewClass' => $this->gridViewClass,
            'exportMenuClass' => $this->exportMenuClass,
        ]);
    }

}
