<?php

namespace app\models;

use DateTime;
use Yii;
use yii\db\ActiveRecord;

class CompuClinicRecord extends ActiveRecord
{

    public function afterDelete()
    {
        $userIdentify = Yii::$app->user->identity; // identifiant du user
        $hist = new Historique();
        $hist->nomTable = $this->tableName();
        $hist->dateModification = new DateTime();
        $hist->isInsert = 2;
        $hist->valeurAv = json_encode($this->getAttributes(null));
        $hist->insert();
        if ($this->tableName() == "table_sensible") {
            // Envoyer une notification pour un certain type de message
            $this->sendMail();
        }
        parent::afterDelete();
    }

    public function afterSave($insert, $changedAttributes)
    {
        $userIdentify = Yii::$app->user->identity; // identifiant du user
        $hist = new Historique();
        $hist->nomTable = $this->tableName();
        $hist->dateModification = new DateTime();
        $hist->isInsert = $insert?0:1;
        $tmp = json_encode(array_intersect_key($this->getOldAttributes(), $changedAttributes));
        foreach($changedAttributes as $key=>$value) {
            $hist->valeurAv = strval($value);
            $hist->valeurAp = strval($tmp[$key]);
            $hist->nomColonne = strval($key);
            $hist->typeDonnee = gettype($value);
            $hist->insert();
        }
        Yii::trace($this->getTableSchema());
        if ($this->tableName() == "table_sensible") {
            // Envoyer une notification pour un certain type de message
            $this->sendMail();
        }
        parent::afterSave($insert, $changedAttributes);
    }

    public function sendMail()
    {
        $message = Yii::$app->mailer->compose();
        $message->setFrom(Yii::$app->params['senderEmail']);
        $message->setTo(Yii::$app->params['adminEmail'])
            ->setSubject('Une modification majeure a été faite')
            ->setTextBody('Plain text content')
            ->send();
    }
}
