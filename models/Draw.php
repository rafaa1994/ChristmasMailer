<?php

namespace app\models;


use Yii;

class Draw
{
    public function draw()
    {
        $result = false;
        $query = Player::find();
        $playersCount = $query->count();
        $players = $query->all();
        $selectedNumbers = [];
        $i = 0;
        while ($i < $playersCount)
        {
            $currentIdx = rand(0, $playersCount - 1);

            $santa = $players[$i];
            $gifted = $players[$currentIdx];
            if (Player::canGift($santa, $gifted, $currentIdx, $selectedNumbers)) {

                /* @var $mailing \app\components\MailComponent */
                $mailing = Yii::$app->mailing;
                $result = $mailing->sendChristmasDraw($santa, $gifted);

                if ($result) {
                    $i++;
                    $selectedNumbers [] = $currentIdx;
                }
                sleep(1);
            }
        }
        return $result;
    }
}