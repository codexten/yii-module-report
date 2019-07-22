<?php

use codexten\yii\dataView\widgets\GridView;
use codexten\yii\web\widgets\IndexPage;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\web\View;

/* @var $page IndexPage */
/* @var $searchModel */
/* @var $this View */
/* @var GridView $exportMenuClass */

ExportMenu::class
?>
<?= Html::dropDownList('pagesize', 10, [10 => 10, 20 => 20, 50 => 50, 100 => 100], ['id' => 'pagesize']
) ?>

<?= Html::a('<i class="fa fa-arrow-left"></i>', ['index'], ['class' => 'btn btn-primary']) ?>

<?= $exportMenuClass::widget([
    'dataProvider' => $dataProvider,
]); ?>
