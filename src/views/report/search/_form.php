<?php

use yii\bootstrap\ActiveForm;
use yii\web\View;

/* @var $this View */
?>

<?php $form = ActiveForm::begin() ?>

<?= $this->render('_fields', ['from' => $form, 'model' => $model]) ?>

<?php ActiveForm::end() ?>

