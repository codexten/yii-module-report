<?php

use codexten\yii\modules\report\reports\ReportInterface;
use yii\bootstrap\ActiveForm;
use yii\web\View;

/* @var $this View */
/* @var $searchModel ReportInterface */
?>

<?php $form = ActiveForm::begin() ?>

<?= $this->render('search/_form', ['form' => $form, 'model' => $searchModel]) ?>

<?php ActiveForm::end() ?>
