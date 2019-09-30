<?php

/* @var \codexten\yii\dataView\widgets\GridView $gridViewClass */
/* @var \yii\data\ActiveDataProvider $dataProvider */
?>

<?= $gridViewClass::widget([
    'dataProvider' => $dataProvider,
//    'filterModel' => $searchModel,
]) ?>
