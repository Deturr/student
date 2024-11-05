<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $naam
 * @property string $klas
 * @property int $minuten
 * @property string $reden
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naam', 'klas', 'minuten', 'reden'], 'required'],
            [['minuten'], 'integer'],
            [['naam'], 'string', 'max' => 100],
            [['klas'], 'string', 'max' => 3],
            [['reden'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naam' => 'Naam',
            'klas' => 'Klas',
            'minuten' => 'Minuten',
            'reden' => 'Reden',
        ];
    }
}
