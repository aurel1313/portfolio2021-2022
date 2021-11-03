<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deconnexion</title>
</head>

<body>
    <h1>Deconnecter l'utilisateur</h1>
    <?php
    echo $_SESSION['pseudo'];
    ?>
    <form action="deconnexion.php" method="post">
        <input type="submit" value="Deconnexion" name="deconnexion">
    </form>
    <?php
    if (isset($_POST['deconnexion'])) {
        session_destroy();
        header('Location:../../index.php');
    }
    ?>
</body>

</html>