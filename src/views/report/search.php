<?php

use codexten\yii\modules\report\reports\ReportInterface;
use yii\helpers\Inflector;
use yii\web\View;

/* @var $this View */
/* @var $model ReportInterface */

$this->title = Inflector::pluralize(Inflector::camel2words(Inflector::id2camel(Yii::$app->controller->id))) . ' Reports';
?>

<?= $this->render('search/_form', ['form' => $form, 'model' => $model]) ?>
