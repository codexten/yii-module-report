<?php

namespace codexten\yii\modules\report\controllers;

use codexten\yii\modules\report\reports\ReportInterface;
use codexten\yii\web\Controller;

/**
 *
 * @property array $pathMaps
 */
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
        /* @var $searchModel ReportInterface*/
        $searchModel = new $this->reportClass();
        $showResult = \Yii::$app->request->get('show_result', false);
        $dataProvider = $searchModel->search(\Yii::$app->request->get());

        if (!$showResult) {
            return $this->render('search', ['model' => $searchModel]);
        }

        $perPage = \Yii::$app->request->get('per-page');
        if ($perPage == -1) {
            $dataProvider->pagination = false;
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'gridViewClass' => $this->gridViewClass,
            'exportMenuClass' => $this->exportMenuClass,
        ]);
    }

}
