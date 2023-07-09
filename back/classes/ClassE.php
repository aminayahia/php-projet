<?php


class ClassE
{
    private $db;

//Connexion à la BD
    function __construct()
    {
        $user = "root";
        $pwd = "";
        $this->db = new PDO('mysql:host=localhost;dbname=gestion_scolaire', $user, $pwd);
        if(!$this->db){
            die('error de connexion');
        }
    }

    function listClass(){
        return $this->db->query("select * from class");
    }
}