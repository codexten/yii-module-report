<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
?>

<?php $form = ActiveForm::begin(['method' => 'get']) ?>

<?= $this->render('_fields', ['form' => $form, 'model' => $model]) ?>

<?= Html::hiddenInput('show_result', true) ?>

<?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>

<?= Html::resetButton('Reset', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?>

