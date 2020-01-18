<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $code
 * @property string|null $nom
 * @property string|null $dateNaissance
 * @property string|null $adresse
 */
class Patient extends CompuClinicRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code'], 'integer'],
            [['dateNaissance'], 'safe'],
            [['nom'], 'string', 'max' => 20],
            [['adresse'], 'string', 'max' => 50],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'nom' => 'Nom',
            'dateNaissance' => 'Date Naissance',
            'adresse' => 'Adresse',
        ];
    }
}
