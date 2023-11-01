<?php
require 'utils/common.php';
require SITE_ROOT . 'utils/database.php';
$pdo = connectToDbAndGetPdo();

$passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/';

if (!empty($_POST['register'])) { 
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $password_register = $_POST['mdp'];
    $check_register = $_POST['mdp_check'];

    if (!preg_match($passwordPattern, $password_register)) { //regarde si le format du mot de passe convient
        throw new Exception("Le mot de passe ne convient pas");
    } else {

        $password_register = trim($password_register); //supprime les espaces blancs inutiles pour éviter un faussage du mot de passe
        $check_register = trim($check_register); //idem

        if ($password_register !== $check_register) { //compare le mdp et le mdp de confirmation et renvoie une erreur si il est différent 
            throw new Exception("Veuillez entrer le même mot de passe !");
        } else {

            try { //insertion des  valeurs dans la base de donnée quand les conditions du dessus sont respectées
                $pdoStatement = $pdo->prepare("INSERT INTO users (usersEmail,usersPassword,usersPseudo) 
                                            VALUES (:usersEmail, :usersPassword, :usersPseudo)");
                $usersHasBeenInserted = $pdoStatement->execute([
                    ':usersEmail' => $email,
                    ':usersPassword' => password_hash($password_register, PASSWORD_DEFAULT),
                    ':usersPseudo' => $pseudo,
                ]);

                if (!$usersHasBeenInserted) { //sécurité en + 
                    throw new Exception("Une erreur s'est produite lors de l'insertion dans la base de données.");
                }

            } catch (Exception $e) { // sécurité en +
                echo "Erreur : " . $e->getMessage();
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="fr">

<?php require SITE_ROOT . 'partials/head.php'; ?>

<body>
    <?php require SITE_ROOT . 'partials/header.php'; ?>
    <main>
        <div id="homeRegister"></div>
        <div class="pages_banner"> <!-- Div pour la bannière des pages -->
            <h1>INSCRIPTION</h1>
        </div>
        <div class="register_form"> <!-- Div pour le formulaire de connexion-->
            <form method="POST">
                <label for="email_register"></label>
                <input type="email" id="email_register" name="email" placeholder="Email" required>
                <label for="pseudo_register"></label>
                <input type="text" id="pseudo_register" name="pseudo" placeholder="Pseudo" required>
                <label for="password_register"></label>
                <input type="password" id="password_register" name="mdp" placeholder="Mot de passe" required>
                <label for="check_register"></label>
                <input type="password" id="check_register" name="mdp_check" placeholder="Confirmer le mot de passe" required>
                <input type="submit" value="Inscription" name="register">

            </form>
        </div>
        <a href="#homeRegister" class="returnHome"></a>
    </main>
    <?php require SITE_ROOT . 'partials/footer.php'; ?>
</body>

</html>