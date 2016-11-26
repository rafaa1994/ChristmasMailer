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

            if ($players[$i] != $players[$currentIdx] && !in_array($currentIdx, $selectedNumbers)) {

                /* @var $mailing \app\components\MailComponent */
                $mailing = Yii::$app->mailing;
                $result = $mailing->sendChristmasDraw($players[$i], $players[$currentIdx]);

                if ($result) {
                    $i++;
                    $selectedNumbers [] = $currentIdx;
                }
            }
        }

        return $result;
    }
}