<?php

namespace kouosl\cevrimici\models;

use Yii;

/**
 * This is the model class for table "cevrimici".
 *
 * @property int $cevrimciID
 * @property string $eposta
 * @property string $konu
 * @property string $icerik
 */
class Cevrimici extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cevrimici';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eposta', 'konu', 'icerik'], 'required'],
            [['konu', 'icerik'], 'string'],
            [['eposta'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cevrimciID' => 'Cevrimci ID',
            'eposta' => 'Eposta',
            'konu' => 'Konu',
            'icerik' => 'Icerik',
        ];
    }
}
