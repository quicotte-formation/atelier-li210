<?php

class PDOPlus extends PDO
{

    public function __construct($a, $b=null)
    {
    }

    public function requete($sql, array $paramsNommes=[], bool $transaction=false){

        if($transaction){
            $this->beginTransaction();
        }

        // Prépare la requete
        $stm = $this->prepare($sql);

        // Bind les params si existent
        foreach ($paramsNommes as $param => $valeur){
            $stm->bindValue( $param, $valeur );
        }

        // Execute
        $stm->execute();

        if($transaction){
            $this->commit();
        }

        // Si select renvoie résult fetchall
        if( stristr($sql, 'SELECT') ){
            return $stm->fetchAll();
        }

        // Sinon renvoi nb lignes affectées
        return $stm->rowCount();
    }
}

new PDOPlus(123);
