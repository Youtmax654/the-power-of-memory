<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Power Of Memory</title>
    <link rel="shortcut icon" href="assets/images/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <header class="header_index">
        <p>The Power Of Memory</p>
        <label for="ch" id="lab"></label>
        <input type="checkbox" id="ch">
        <nav class="header-right"> <!-- Navbar -->
            <ul>
                <li><a href="index.html">ACCUEIL</a></li>
                <li><a href="memory.html">JEU</a></li>
                <li><a href="scores.html">SCORES</a></li>
                <li><a href="contact.html">NOUS CONTACTER</a></li>
                <li><a href="login.html">CONNEXION</a></li>
                <li><a href="register.html">INSCRIPTION</a></li>
                <li><a href="myAccount.html">MON COMPTE</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="home"></div>
        <article id="welcome">
            <h1>Bienvenue dans notre studio !</h1>
            <p>Venez challenger les cerveaux les plus agiles !</p>
            <a href="login.html" id="button">Jouer !</a>
        </article>
        <div id="IlluImg">
            <div id="AllImg">
                <div class="img"><img src="assets/images/PC.jpg" alt="a picture of a pc"></div>
                <div class="img"><img src="assets/images/illustration.jpg" alt="a illustration"></div>
                <div class="img"><img src="assets/images/flush.jpg" alt="a lot a poker card"></div>
            </div>
            <div>
                <div>
                    <p>01</p>
                    <p>Lorem Ipsum</p>
                    <p>sit amet consectetur adipisicing elit. Reiciendis quisquam omnis sunt unde, ipsa ipsam pariatur
                        delectus, eum placeat quibusdam enim, amet nostrum voluptatum corrupti minus rem qui eius
                        itaque!</p>
                </div>
                <div>
                    <p>02</p>
                    <p>Lorem Ipsum</p>
                    <p>sit amet consectetur adipisicing elit. Reiciendis quisquam omnis sunt unde, ipsa ipsam pariatur
                        delectus, eum placeat quibusdam enim, amet nostrum voluptatum corrupti minus rem qui eius
                        itaque!</p>
                </div>
                <div>
                    <p>03</p>
                    <p>Lorem Ipsum</p>
                    <p>sit amet consectetur adipisicing elit. Reiciendis quisquam omnis sunt unde, ipsa ipsam pariatur
                        delectus, eum placeat quibusdam enim, amet nostrum voluptatum corrupti minus rem qui eius
                        itaque!</p>
                </div>
            </div>
        </div>
        <div id="Stats">
            <img src="assets/images/img-ia.jpg" alt="img genereted by a ia">
            <div>
                <div>
                    <p>310</p>
                    <p>Partie Jouées</p>
                </div>
                <div>
                    <p>1020</p>
                    <p>Joueur Connectés</p>
                </div>
                <div>
                    <p>10 sec</p>
                    <p>Temps Record</p>
                </div>
                <div>
                    <p>21 300</p>
                    <p>Joueurs Inscrits</p>
                </div>
            </div>
        </div>
        <article id="Team">
            <h2>Notre Équipe</h2>
            <p>dolor sit amet consectetur adipisicing elit. Odio voluptas laudantium impedit pariatur voluptate debitis.
            </p>
            <img src="assets/images/Transition.png" alt="Transition image">
            <div>
                <div>
                    <div class="pp"><img src="assets/images/personne-1.jpg" alt="a person"></div>
                    <p>Hamilton</p>
                    <p>Games Developer</p>
                    <div class="reseau">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-pinterest"></i>
                    </div>
                </div>
                <div>
                    <div class="pp"><img src="assets/images/personne-2.jpg" alt="a person"></div>
                    <p>Mickhel</p>
                    <p>Games Designer</p>
                    <div class="reseau">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-pinterest"></i>
                    </div>
                </div>
                <div>
                    <div class="pp"><img src="assets/images/personne-3.gif" alt="a person"></div>
                    <p>Rick</p>
                    <p>Games Developer</p>
                    <div class="reseau">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-pinterest"></i>
                    </div>
                </div>
            </div>
        </article>
        <a href="#home" class="returnHome"></a>
    </main>
    <footer>
        <!-- Divisons du footer en deux parites pour pouvoir mettre en colonne le footer avec la ligne du copyright-->
        <div class="footer-body"> <!--section pour la parite principale du footer-->
            <!-- Séparation du footer-body en deux parties -->
            <div class="Informations"> <!-- Création de la partie informations -->
                <div class="Titre">
                    <p><strong>Informations</strong></p>
                </div> <!-- classe titre qui permettra d'isoler le titre pour le modifier seul -->
                <p>Lorem ipsum, dolor sit amet consectetur.</p>

                <div class="Tel"> <!-- classe pour contacter par téléphone -->
                    <p><strong>Tel : </strong>06 74 56 14 16</p>
                </div>

                <div class="Email"> <!-- classe pour contacter par email -->
                    <p><strong>Email : </strong>Oui@ceciestunmail.com</p>
                </div>

                <div class="Location"> <!-- classe pour savoir la localisation de l'entreprise -->
                    <p><strong>Location : </strong>Paris</p>
                </div>

                <div class="Images"> <!-- classe pour insérer les logos de réseaux sociaux -->
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>

            <div class="PowerOfMemory"> <!-- classe pour la partie liens-->
                <div class="Titre">
                    <p><Strong>Power Of Memory</Strong></p>
                </div> <!-- classe pour isoler le titre pour le modifier seul -->
                <ul class="Liste"> <!-- classe pour faire la liste des liens -->
                    <li><a href="memory.html">Jouer !</a></li>
                    <li><a href="scores.html">Les scores</a></li>
                    <li><a href="contact.html">Nous contacter</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom"> <!-- section pour insérer la ligne de copyright -->
            <span> Copyright © 2023 Tous droits reservés </span>
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/1f0991f3fc.js" crossorigin="anonymous"></script>
    <!-- librairie fontAwesome -->
</body>

</html>