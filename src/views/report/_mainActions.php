<?php

use codexten\gnt\admin\models\Commission;
use codexten\yii\web\widgets\IndexPage;
use kartik\export\ExportMenu;
use yii\bootstrap\Modal;
use yii\helpers\Html;

/* @var $page IndexPage */
/* @var $searchModel */
/* @var $this \yii\web\View */
/* @var \codexten\yii\dataView\widgets\GridView $exportMenuClass */

ExportMenu::class
?>

<?= Html::a('<i class="fa fa-refresh"></i>', ['index']) ?>

<?php Modal::begin([
    'header' => 'Search',
    'toggleButton' => ['label' => 'search', 'class' => 'btn btn-success'],
]); ?>

<?= $this->render('_search', ['model' => $searchModel]) ?>

<?php Modal::end(); ?>

<?= $exportMenuClass::widget([
    'dataProvider' => $dataProvider,
]); ?>
