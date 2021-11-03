<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <h1>Inscription utilisateurs</h1>
    <form action="inscription.php" method="post">
        <label for="username">type your username</label>
        <input type="text" placeholder="type your username" name="username" /><br />

        <label for="username">type your firstname</label>
        <input type="text" class="prenom" name="firstname" placeholder="type your firstname"><br />

        <label for="username">type your lastname</label>
        <input type="text" class="nom" placeholder="type your lastname" name="lastname"><br />

        <label for="mail"></label>
        <input type="email" name="mail" id="mail"><br />

        <label for="password">type your password</label>
        <input type="password" name="pswd" autocomplete="new-password" placeholder="type your password" minlength="8" /><br />

        <input type="submit" value="valider" name="valider">
    </form>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "root";
    try {
        $connexion = new PDO("mysql:host=$server;dbname=portfolio", $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //insertion des données//
        $sql = "INSERT INTO user(pseudo,nom,prenom,email,mdp) VALUES('" . $_POST['username'] . "','" . $_POST['lastname'] . "','" . $_POST['firstname'] . "','" . $_POST['mail'] . "','" . md5($_POST['pswd']) . "');";
        $connexion->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    ?>

</body>

</html>