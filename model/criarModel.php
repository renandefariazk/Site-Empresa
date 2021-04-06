<?php
require "./database.php";


function insertDB($nome,$password,$cpf,$email,$internet){
    $banco = new PDO('mysql','siteEmpresa','localhost','root','');
    $query = "INSERT INTO cliente SET nome=:nome, passwords=:passwords, cpf=:cpf, email=:email, internet=:internet";
    $bancoConnect = $banco->prepare($query);
    $bancoConnect->bindParam(':nome',$nome);
    $bancoConnect->bindParam(':passwords',$password);
    $bancoConnect->bindParam(':cpf',$cpf);
    $bancoConnect->bindParam(':email',$email);
    $bancoConnect->bindParam(':internet',$internet);
    $bancoConnect->execute();
}