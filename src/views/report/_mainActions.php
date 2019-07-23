<?php

use codexten\yii\dataView\widgets\GridView;
use codexten\yii\web\widgets\IndexPage;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $page IndexPage */
/* @var $searchModel */
/* @var $this View */
/* @var GridView $exportMenuClass */
/* @var ActiveDataProvider $dataProvider */

$js = <<<JS
$('#pagesize').change(function() {
  $("#searchConfigForm").submit();
});
JS;

$this->registerJs($js);
?>

<?= Html::beginForm(Url::current(), 'get', ['id' => 'searchConfigForm', 'class' => 'inline-block']) ?>

<?= Html::dropDownList('per-page',
    Yii::$app->request->get('per-page'),
    [10 => 10, 20 => 20, 50 => 50, 100 => 100, -1 => 'Show All'],
    ['id' => 'pagesize']) ?>

<?= Html::endForm() ?>

<?= Html::a('<i class="fa fa-arrow-left"></i>', ['index'], ['class' => 'btn btn-primary']) ?>

<?= $exportMenuClass::widget([
    'dataProvider' => $dataProvider,
]); ?>
