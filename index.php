<?php
include_once "Database.php";
include_once "Supprimer.php";
include_once "Ajouter.php"; 
include_once "Modifier.php";
include_once "Rechercher.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: auto; /* Ajout pour centrer le formulaire */
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

<div class="form-container">
    <form action="" method="post"enctype="multipart/form-data">
        <!-- ... Vos champs de formulaire ... -->
        <input type="text" id="id" name="id" placeholder="Saisir ID" value = "<?php echo "$id"?>">
        <input type="text" id="Nom" name="Nom" placeholder="Saisir Nom" value = "<?php echo "$nom"?>">
        <input type="text" id="Prenom" name="Prenom" placeholder="Saisir prenom" value="<?php echo "$prenom"?>">
        <input type="text" id="Email" name="Email" placeholder="Saisir Email" value="<?php echo "$email"?>">
        <input type="submit" name="ajouter" value="ajouter"><br>
        <input type="submit" name="rechercher" value="rechercher"><br>
        <input type="submit" name="supprimer" value="supprimer"><br>
        <input type="submit" name="modifier" value="modifier"><br>
    </form>
</body>
</html>