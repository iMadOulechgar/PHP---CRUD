<?php

   if(isset($_POST['ajouter']))
   if(empty($_POST['id']) || empty($_POST['Nom']) || empty($_POST['Prenom']) || empty($_POST['Email']) )
    {
        echo "<script>alert('Veuillez remplir tous les champs');</script>";
    }
    else{

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
            echo "<script>alert('Cette personne existe déjà');</script>";
        }
        else{

            $sqlpg_insert = "INSERT INTO imad (id , Nom , Prenom , Email) VALUES (:id , :Nom , :Prenom , :Email)";
            $st_isrt = $pgconn -> prepare($sqlpg_insert) ;
            $st_isrt -> bindParam(':id' , $id);
            $st_isrt -> bindParam(':Nom' , $Nom);
            $st_isrt -> bindParam(':Prenom' , $Prenom);
            $st_isrt -> bindParam(':Email' , $Email);
            $st_isrt ->execute(); 
        }
    }
?>