<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\basePlayer */

$this->title = 'Update Base Player: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Base Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="base-player-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
