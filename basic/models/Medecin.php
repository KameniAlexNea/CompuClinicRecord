<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medecin".
 *
 * @property int $code
 * @property string|null $nom
 * @property string|null $dateNaissance
 */
class Medecin extends CompuClinicRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medecin';
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
        ];
    }

    /**
     * {@inheritdoc}
     * @return MedecinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MedecinQuery(get_called_class());
    }
}
