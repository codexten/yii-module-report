<?php

use codexten\yii\web\widgets\IndexPage;
use yii\helpers\Inflector;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel */
/* @var $_params_ array */

$this->title = Inflector::pluralize(Inflector::camel2words(Inflector::id2camel(Yii::$app->controller->id))) . ' Reports';
?>

<?php $page = IndexPage::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('main-actions', $_params_) ?>

<?= $this->render('_mainActions', \yii\helpers\ArrayHelper::merge($_params_, compact(['page']))) ?>

<?php $page->endContent() ?>

<?php $page->beginContent('table') ?>

<?= $this->render('_grid', $_params_) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
