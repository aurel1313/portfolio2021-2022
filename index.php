<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/43a25929a3.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
</head>

<body>
    <div class="propos">
        <h1 class="presentation">Bienvenue sur le portfolio d'Aurélien Fabre</h1>
    </div>
    <div class="navigation">
        <nav class="menu">
            <i class="fas fa-bars fa-2x"></i>
            <ul>
                <li><a href="">mes projets</a></li>
                <li><a href="./views/Competences/Competences.html">mes competences</a></li>
                <li><a href="">mes loisirs</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="./views/Inscription/inscription.php">Inscription</a></li>
                <li><a href="./views/Connexion/connexion.php">Connexion</a></li>
                <?php
                if (isset($_SESSION['pseudo'])) {
                    echo $_SESSION['pseudo'];
                }
                ?>
                <?php if (isset($_SESSION['pseudo'])) {
                    echo "<a href='./views/Connexion/deconnexion.php'>Deconnexion</a>";
                }
                ?>
            </ul>
        </nav>
    </div>
    <div id="moi">
        <div class="avatar">
            <img src='https://avataaars.io/?avatarStyle=Circle&topType=Turban&accessoriesType=Prescription01&hatColor=PastelOrange&facialHairType=BeardMedium&facialHairColor=Black&clotheType=BlazerShirt&eyeType=WinkWacky&eyebrowType=FlatNatural&mouthType=Concerned&skinColor=Pale' />
        </div>
        <p class="personnel">
            Bonjour , moi c'est Aurélien Fabre ,23 ans
            ,passionné de developpement web , de jeux-videos ,d'actualité de nouvelles technologies
            de foot.Je vous fais une demonstration ici de mes competences.&#128540;
            <i class="fas fa-angle-double-down"></i>
        </p>
    </div>
    <div class="inscris">
        <h1 class="inscrit">Liste des inscris sur le portfolio</h1>
        <div class="slider">
            <div class="slide" id="slider1">slider 1</div>
            <div class="slide" id="slider2">slider 2</div>
        </div>
    </div>
    <footer>
        <div class="contact">
            <h1 id="contacts">Mes reseaux sociaux</h1>
            <div class="icon">
                <div class="facebook">
                    <a href="">
                        <i class="fab fa-facebook fa-3x"></i>
                    </a>
                </div>
                <div class="twitter">
                    <a href="">
                        <i class="fab fa-twitter-square fa-3x"></i>
                    </a>
                </div>
                <div class="discord">
                    <a href="">
                        <i class="fab fa-discord fa-3x"></i>
                    </a>
                </div>
            </div>


        </div>
        <div class="pro">
            <h1>Mes reseaux professionnels</h1>
            <div id="linkedin">
                <a href="">

                </a>
            </div>
        </div>

    </footer>
</body>

</html>