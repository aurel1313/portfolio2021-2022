<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion de l'utilisateur</h1>
    <form action="connexion.php" method="post">
        <label for="user">saisir votre username</label><input type="text" name="user" id="user"><br />
        <label for="secure">saisir votre mot de passe</label><input type="password" name="secure" autocomplete="new-password" id="secure">
        <input type="submit" value="confirm">
    </form>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "root";
    try {
        $connexion = new PDO("mysql:host=$server;dbname=portfolio", $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $select = "SELECT * from user ";
        $data = $connexion->prepare($select);
        $data->execute();
        foreach ($connexion->query($select) as $row) {
            if ($row['pseudo'] === $_POST['user'] && $row['mdp'] == md5($_POST['secure'])) {
                echo "connexion en cours...";
                $_SESSION['pseudo'] = $_POST['user'];
                header('Location:../../index.php');
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


    ?>
</body>

</html>