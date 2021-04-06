<?php
class DataBase {
    private $bancoName;
    private $dbname;
    private $host;
    private $user;
    private $password;
    function __construct($bancoName,$dbname,$host,$password){
        try{
            $connection = new PDO($this->bancoName.":dbname=".$this->dbname.";host=".$this->host.",".$this->user.",".$this->password);
        }catch(PDOException){
            echo "Erro ao carregar o Banco de Dados";
        }
    }
}