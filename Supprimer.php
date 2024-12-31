<?php

if(isset($_POST['supprimer']))
if(empty($_POST['id']))
{
    echo "<script>alert('Veuillez remplir le champ ID');</script>";
}else{

    $id = $_POST['id'];

    $pg_sql = "DELETE FROM imad WHERE id = :id";
    $stSupp = $pgconn->prepare($pg_sql);
    $stSupp -> bindParam(':id',$id);
    $check = $stSupp -> execute();

    if ($check) 
    echo "<script>alert('Supp Done :)');</script>";
    else
    echo "<script>alert('SomeThing Wrong On Supp :( ');</script>";
}
?>