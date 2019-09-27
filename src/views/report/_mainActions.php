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
<?= Html::a('Show All', Url::current(['per-page' => -1]), ['class' => 'btn']) ?>

<?= Html::beginForm(Url::current(), 'get', ['id' => 'searchConfigForm', 'class' => 'inline-block']) ?>

<?= Html::dropDownList('per-page',
    Yii::$app->request->get('per-page', 20),
    [10 => 10, 20 => 20, 50 => 50, 100 => 100, -1 => 'Show All'],
    ['id' => 'pagesize']) ?>

<?= Html::endForm() ?>

<?= Html::a('<i class="fa fa-arrow-left"></i>',
    Url::current(['show_result' => false]),
    ['class' => 'btn btn-primary']) ?>

<?= $exportMenuClass::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
]); ?>
