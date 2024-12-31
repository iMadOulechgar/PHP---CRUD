<?php

if(isset($_POST['modifier']))
if(empty($_POST['id']) || empty($_POST['Nom']) || empty($_POST['Prenom']) || empty($_POST['Email']))
{
    echo "<script>alert('Veuillez remplir tous les champs');</script>";
}else
{
    $id = $_POST['id'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Email = $_POST['Email'];

    $pgsql_select = "select * from imad where id = :id";
    $st_slt = $pgconn -> prepare($pgsql_select);
    $st_slt -> bindParam(':id' , $id);
    $st_slt->execute();
    $checker = $st_slt -> fetch(PDO::FETCH_ASSOC);

    if ($checker) {
        $sqlpg_update = "UPDATE imad SET Nom = :Nom , Prenom = :Prenom , Email = :Email WHERE id = :id";
        $st_up = $pgconn -> prepare($sqlpg_update);
        $st_up -> bindParam(':id' , $id);
        $st_up -> bindParam(':Nom' , $Nom);
        $st_up -> bindParam(':Prenom' , $Prenom);
        $st_up -> bindParam(':Email' , $Email);
        $st_up ->execute();

        echo "<script>alert('The Update Done :)');</script>";
    }else
    {
        echo "<script>alert('The Personne is Not in db :(');</script>";
    }
}







?>