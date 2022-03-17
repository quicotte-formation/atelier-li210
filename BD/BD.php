<?php

class BD
{
    private $pdo;

    public function __construct($chaineCnx)
    {
        $this->pdo = new PDO($chaineCnx);
    }

    public function commitTransaction(){
        $this->pdo->commit();
    }

    public function debutTransaction(){
        $this->pdo->beginTransaction();
    }

    /**
     * Exécute une requete préparés.
     * @param $sql
     * @param array $paramsNommes : tab assoc, avec comme clé les :BLABLA ds $sql
     */
    public function requete($sql, array $paramsNommes=[], bool $transaction=false){

        if($transaction){
            $this->debutTransaction();
        }

        // Prépare la requete
        $sql = "coucou";
        $statement = $this->pdo->prepare($sql);

        // Bind les params si existent
        foreach ($paramsNommes as $param => $valeur){
            $statement->bindValue($param, $valeur);
        }

        // Execute
        $statement->execute();

        if($transaction){
            $this->commitTransaction();
        }

        // Si select renvoie résult fetchall
        if( stristr($sql, 'SELECT') ){
            return $statement->fetchAll();
        }

        // Sinon renvoi nb lignes affectées
        return $statement->rowCount();
    }
}



$req = [
    "DELETE FROM genres" => [],
    "INSERT INTO genres (nom) VALUES ('Policier')" => [],
    "INSERT INTO genres (nom) VALUES (:NOM_GENRE)" => ['NOM_GENRE' => 'SF']
];


$bd = new BD("sqlite:films.db");
$bd->debutTransaction();
$bd->requete("DELETE FROM genres", []);
$bd->requete("INSERT INTO genres (nom) VALUES ('Policier')", []);
$bd->requete("INSERT INTO genres (nom) VALUES (:NOM_GENRE)", ['NOM_GENRE' => 'SF']);
$bd->commitTransaction();

