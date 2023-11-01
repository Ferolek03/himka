<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Vid $model */

$this->title = 'Update Vid: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
