<?php

use codexten\gnt\admin\models\Commission;
use codexten\yii\web\widgets\IndexPage;
use kartik\export\ExportMenu;
use yii\bootstrap\Modal;

/* @var $page IndexPage */
/* @var $searchModel */
/* @var $this \yii\web\View */
/* @var \codexten\yii\dataView\widgets\GridView $exportMenuClass */

ExportMenu::class
?>

<?php Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => ['label' => 'search'],
]); ?>

<?= $this->render('_search', ['model' => $searchModel]) ?>

<?php Modal::end(); ?>

<?= $exportMenuClass::widget([
    'dataProvider' => $dataProvider,
]); ?>
