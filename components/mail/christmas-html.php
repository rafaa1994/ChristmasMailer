<?php

use yii\web\View;

/* @var $this View */
/* @var $player \app\models\Player */

?>
<div class="draw">
    <html style="background-color:#09384c;">
    <body style="background-color:#09384c;">
    <center style="background-color:#09384c;">
        <img src="http://i.imgur.com/PMYEiLk.png" alt="Header">
    </center>
    <div>
        <center>
            <p style="margin:0px; font-size:50px; font-family:monotype corsiva; color:#f3efe4; background-color:#09384c; background-image:url('http://i.imgur.com/IcBcpo7.png'); background-repeat:repeat-y; background-position: center; ">
               Ho ho ho ! <br>
                W tym roku jesteś Mikołajem dla: <br>
                <?=$drawedPlayer->nick?> <br>
            </p>
        </center>
    </div>
    <center style="background-color:#09384c;">
        <img src="http://i.imgur.com/Ln5QHp5.png" alt="Footer" />
    </center>
    </body>
    </html>
</div>