<?php

namespace app\models;
use app\models\base\basePlayer;
use yii\db\ActiveRecord;

/**
 * This is the model class for table class basePlayer".
 */
class Player extends basePlayer
{

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->name . ' ' . $this->surname;
    }

    /**
     * @param $santa Player|ActiveRecord
     * @param $gifted Player|ActiveRecord
     * @param $drawed integer
     * @param $alreadySelected array
     * @return bool
     */
    public static function canGift($santa, $gifted, $drawed, $alreadySelected)
    {
        return $santa !== $gifted && !in_array($drawed, $alreadySelected) && $santa->except_id != $gifted->id;
    }

}
