<?php
$id = "";
$nom = "";
$prenom = "";
$email = "";

if(isset($_POST['rechercher']))
if(empty($_POST['id']))
{
    echo "<script>alert('The Input of Id Is Empty :( ')</script>";
}else{
    $id = $_POST['id'];

    $sqlpg = "SELECT * FROM imad WHERE id = :id";
    $strchr = $pgconn->prepare($sqlpg);
    $strchr -> bindParam(':id' , $id);
    $strchr->execute();

    $row = $strchr->fetch(pdo::FETCH_ASSOC);
    if(!$row){
        echo "<script>alert(' Id Not Found :( ')</script>";
    }else{
        $id = $row['id'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $email = $row['email'];
    }
}

?>