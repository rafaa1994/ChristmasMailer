<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'ChristmasMailer';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>ChristmasMailer</h1>

        <p class="lead">Ho ho ho ! Merry Christmas !</p>

        <p><?=Html::a('Let\'s get draw starting !!!',
                        ['site/draw'],
                        [ 'class' => 'btn btn-lg btn-success'])?>
        </p>
    </div>
</div>
