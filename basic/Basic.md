# Sauvegarde et Historique

## Sauvegarde

> Elle est assurée par défaut par la classe [ActiveRecord]() présente dans [Yii]()

> Cette classe nous permet de faire toutes les opérations comme :
>* Insert (Inserer)
>* Delete (Supprimer)
>* Update (Mise à Jour)

Sauf que dans notre cas, nous avons besoin que toutes les opérations précedentes entraîne un ajout d'un certain nombre de lignes dans la table historique

## Historique

> Elle étant la classe [ActiveRecord]() puisque nous ne faisons pas l'historique de l'historique
>### Table Historique (`SQL` de création)
>> DROP TABLE IF EXISTS `historique`;
>>
>>CREATE TABLE IF NOT EXISTS `historique` (
>>>`id` int(11) NOT NULL AUTO_INCREMENT,
>>>
>>>`nomTable` varchar(50) DEFAULT NULL,
>>>
>>>`valeurAv` text DEFAULT NULL,
>>>
>>>`valeurAp` text DEFAULT NULL,
>>>
>>>`isInsert` tinyint(1) DEFAULT NULL,
>>>
>>>`dateModification` datetime DEFAULT current_timestamp(),
>>>
>>>`typeDonnee` varchar(11) DEFAULT NULL,
>>>
>>>`nomColonne` varchar(50) DEFAULT NULL,
>>>
>>>PRIMARY KEY (`id`)
>>>
>>) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

>### CompuClinicRecord
>> Cette classe étant la classe [ActiveRecord](), dans cette classe, nous écoutons les évènements comme :
>>* `AfterSave` : Méthode appelée juste après une insertion ou la mise à jour a été faite avec un comme paramètre
>>
>>>>>### $`insert` :
>>Permet de savoir si c'est une insertion ou une mise à jour
>>   
>>>>>### $`changedAttributes` : 
>>Qui est [Array]() contenant la liste des colonnes modifiées avec leurs valeurs (valeurs avant la modification)
>>
>>>>>### `getOldAttributes`
>> C'et cette méthode qui nous permet d'avoir les attributs et valeurs de la table étandant *CompuClinicRecord*
>>
>>* `AfterDelete` : Méthode appelée juste après une suppression de données dans la bd
>>>>> Dans cette partie nous recupérons les attributs présentes dans la base de données juste avant la suppréssion et nous les ajoutons à la table historique

# Utilité de faire l'historique

Dans cette partie nous vous donnerons quelques utilités de faire des sauvegrades des modifications de la base
* Historique nous permet de faire des `statistiques` sur les données modifiées: pouvant faciliter plus tard
* Informer l'administrateur sur la modification des données sensibles: envoie d'un mail par exemple
* Faire un backupde toutes les données modifiées depuis une certaine période

# Service de mails (`Ajout volontaire`)

Comme nous avons soulevé plus haut, l'historique pourrait nous être utile si nous souhaitons notifier l'administrateur pour la modification des données sensibles

> La classe `CompuCliniRecord` contient *sendMail* qui lit les différents paramètres (paramètres [*gmail*]()) de l'administrateur