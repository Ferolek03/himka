<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Vid $model */

$this->title = 'Create Vid';
$this->params['breadcrumbs'][] = ['label' => 'Vids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
