<?php

namespace app\models\base;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "{{%player}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $nick
 * @property string $email
 */
class basePlayer extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%player}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'email', 'nick'], 'required'],
            [['name', 'surname', 'email', 'nick'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
            'nick'  => 'Nick',
        ];
    }
}
