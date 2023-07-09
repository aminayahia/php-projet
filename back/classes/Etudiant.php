<?php


class Etudiant
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


function addEtudiant($data){//$_POST, $_GET

    $nom = $data['nom'];
    $pr = $data['prenom'];
	$cin = $data['cin'];
    $email = $data['email'];
	$class = $data['class'];
	$pw = $data['pw'];
	$genre =$data['genre'];
	$dateN =$data['dateN'];
    //Create Query
    $q = "insert into etudiant values ('', '$nom','$pr','$cin','$email','$class','$pw','$genre','$dateN')";
    $r = $this->db->exec($q);
    if($r){
       
		header("Location:auth-normal-sign-in.php");
		
    }
}
function listeEtudiant(){
    return $this->db->query("select * from etudiant");
}
//login Etudinat
function loginEtudiant($email,$pwd){
       $e = $this->db->query("select * from etudiant where 
                           email='$email' and password='$pwd'");
    if($etudiant = $e->fetch()){
        $idE=$etudiant['id'];
        header("location:profilEtudiant.php?id=$idE");
    }
    else {
        echo "login or password not found";
    }
}
//Update Etudiant
function updateEtudiant($data){
    $nom = $data['nom'];
    $pr = $data['prenom'];
    $id = $data['id'];
	 $email = $data['email'];
	
    $q = "update etudiant set nom='$nom', prenom='$pr',email='$email' where id='$id'";
    $this->db->exec($q);
}
//Get Etudiant By Id
function getEtudiantById($id){
   return $this->db->query("select * from etudiant where id='$id'");
}

//Delete Etudiant
function deleteEtudiant($id){
    $this->db->exec("delete from etudiant where id='$id'");
}

function countEtudiant(){
   return $this->db->query("SELECT COUNT(*) as total_etudiants  FROM etudiant");
}

function countnbFemme(){
   return $this->db->query("SELECT COUNT(*) as total_femmes  FROM etudiant where genre='mme' ");
}
function countnbHomme(){
   return $this->db->query("SELECT COUNT(*) as total_hommes  FROM etudiant where genre='mr'");
}


}