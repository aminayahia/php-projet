<?php


class Enseignant
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

function listeEnseignant(){
    return $this->db->query("select * from enseignant");
}

//Get Enseignant By Id
function getEnseignantById($id){
   return $this->db->query("select * from enseignant where id='$id'");
}
//Add Enseignant
function addEnseignant($data){

    $nom = $data['nom'];
    $pr = $data['prenom'];
    $email = $data['email'];
	$id_departement =$data['id_departement'];
    //Create Query
    $q = "insert into enseignant values ('', '$nom','$pr','$email','$id_departement')";
    $r = $this->db->exec($q);
    if($r){
      header("Location:enseignant.php");
		
    }
}

//Update Enseignant
function updateEnseignant($data){
	 echo "<script type='text/javascript'>alert('ppppppppp');</script>";
    $nom = $data['nom'];
    $pr = $data['prenom'];
    $id = $data['id'];
	 $email = $data['email'];
	 $id_departement = 1;
    //Create Query
    $q = "update enseignant set nom='$nom', prenom='$pr',email='$email',id_departement='$id_departement' where id='$id'";
    $this->db->exec($q);
}
//Delete Enseignant
function deleteEnseignant($id){
    $this->db->exec("delete from enseignant where id='$id'");
}
}