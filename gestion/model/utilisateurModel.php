<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM utilisateur";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM utilisateur WHERE id=$id";
   return pg_query($connexion,$sql);
}

function add($nom,$prenom,$email,$motdepasse){
    global $connexion;
    $sql ="INSERT INTO utilisateur (nom,prenom,email,motdepasse) values
     ('$nom','$prenom','$email','$motdepasse')";
   return pg_query($connexion,$sql);
}

function updateUtilisateur($id,$nom,$prenom,$email,$motdepasse){
    global $connexion;
    $sql ="UPDATE utilisateur SET nom='$nom',prenom='$prenom',email='$email',motdepasse='$motdepasse' 
    where id=$id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM utilisateur where id = $id";
    return pg_query($connexion,$sql);
}



?>