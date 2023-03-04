<?php

use LDAP\Result;

class Database{
    private $pdo;
    private static $instance    =   null;

    private function __construct($config)
    {
        try{
            $dsn    =   'mysql:' .  http_build_query($config, '', ';');
            $this->pdo  =   new PDO($dsn);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            echo "Error: ". $e->getMessage();
            exit;
        }
    }

    public static function getInstance($config){
        if (self::$instance  === null){
            self::$instance =   new Database($config);
        }

        return self::$instance;
    }
    private function query($query, $args){
        $stmt   =   $this->pdo->prepare($query);
        $stmt->execute($args);
        return $stmt;
    }
    public function fetchOrAbort( $query, $args = [] ){
        $response =   $this->query($query, $args);
        $result =   $response->fetch();
        if (empty($result)){
            abort();
        }
        return $result;
    }
    public function fetchAllOrAbort( $query, $args = [] ){
        $response =   $this->query($query, $args);
        $result =   $response->fetchAll();
        if (empty($result)){
            abort();
        }
        return $result;
    }
    public function insertOrAbort( $query, $args = [] ){
        $response   =   $this->query($query, $args);
        if ($this->pdo->lastInsertId()  === false){
            abort(1064);
        }

    }
    public function getLastInsertedId(){
        return $this->pdo->lastInsertId();
    }
}
?>