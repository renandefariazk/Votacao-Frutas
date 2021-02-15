<?php
class DataBase{
    private $pdo;
    function __construct(){
        try{
            $this->pdo = new PDO('mysql:dbname=votar;host=localhost','root','');
        }catch(PDOException $erro){
            echo"Erro:".$erro->getMessage();
        }
    }

    public function get($id){
        $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        }else{
            return array();
        }
    }
    public function getAll(){
        $sql = $this->pdo->query("SELECT * FROM usuario");
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        }else{
            return array();
        }
    }
    public function getCount(){
        $sql = $this->pdo->query("SELECT fruta, COUNT(fruta) as votos FROM usuario GROUP BY fruta");
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        }else{
            return array();
        }
    }
    public function inserir($nome,$fruta){
        $sql = $this->pdo->prepare("INSERT INTO usuario(nome,fruta) VALUES(:nome,:fruta)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':fruta',$fruta);
        $sql->execute();
    }
}