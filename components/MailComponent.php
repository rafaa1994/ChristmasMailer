<?php

namespace app\components;

use app\models\Player;
use Yii;
use yii\base\Component;


class MailComponent extends Component
{

    /**
     * @param $player Player
     * @param $drawedPlayer Player
     * @return bool|null
     */
    public function sendChristmasDraw($player, $drawedPlayer)
    {

        $message = null;
        if ($player) {
                $message = Yii::$app->mailer->compose(['html' => 'christmas-html', 'text' => 'christmas-text'], [
                    'drawedPlayer' => $drawedPlayer,
                    'player' => $player
                    ])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::t('app', 'Christmas Mailer 2.0')])
                    ->setTo($player->email)
                    ->setSubject('Prezenty!!!')
                    ->send();
        }

        return $message;
    }

}
