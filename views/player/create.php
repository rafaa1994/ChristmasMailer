<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\base\basePlayer */

$this->title = 'Create Base Player';
$this->params['breadcrumbs'][] = ['label' => 'Base Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="base-player-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
